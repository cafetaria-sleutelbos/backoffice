<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreScanRequest;
use App\Models\Item;
use App\Models\Order;
use App\Models\Scan;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\AI\Adjusted\AdjustedService;
use Throwable;

class ScanController extends Controller
{
    public function store(Request $request)
    {
//        $validated = $request->validated();
        $image_base64 = $request->get('receipt_image');
        if ($image_base64) {
            $image_base64 = str_replace('data:image/png;base64,', '', $image_base64);
            $image_base64 = str_replace(' ', '+', $image_base64);

            // Get file data base64 string
            $fileData = base64_decode($image_base64);

            // Create temp file and get its absolute path
            $tempFile = tmpfile();
            $tempFilePath = stream_get_meta_data($tempFile)['uri'];

            // Save file data in file
            file_put_contents($tempFilePath, $fileData);

            $tempFileObject = new File($tempFilePath);
            $file = new UploadedFile(
                $tempFileObject->getPathname(),
                $tempFileObject->getFilename(),
                $tempFileObject->getMimeType(),
                0,
                true // Mark it as test, since the file isn't from real HTTP POST.
            );

            // Close this file after response is sent.
            // Closing the file will cause to remove it from temp director!
            app()->terminating(function () use ($tempFile) {
                fclose($tempFile);
            });

            $path = Storage::disk('public')->putFile('receipts', $file);
            $scan = Scan::create([
                'data' => $request->get('data'),
                'receipt_path' => $path
            ]);

            $this->processScan($scan, $file);

            return response('Scan received WITH image: ' . $path, 200);
        } else {
            Scan::create([
                'data' => $request->get('data'),
                'receipt_path' => null
            ]);
            return response('scan received WITH NO image', 200);
        }
    }

    public function processScan(Scan $scan, $file)
    {
        $scanData = json_decode($scan->data);

        $order = Order::create([
            'status' => 'WAITING'
        ]);

        try {
            foreach ($scanData as $data) {
                $itemString = implode('', collect($data)->map(function ($block) {
                    return $block[0];
                })->all());
                $itemArr = explode('x', $itemString, 2);
                if (count($itemArr ?? []) < 2) {
                    //SMALLER, SO NO AMOUNT (expected array(2)[AMOUNT, NAME]
                } else {
                    //SMALLER, SO NO AMOUNT (expected array(2)[AMOUNT, NAME]
                    $item = $this->getItem($itemArr);
                    if (!$item) {
                        return false;
                    }

                    for ($i = 0; $i < $itemArr[0]; $i++) {
                        $order->items()->attach($item);
                    }
                }
            }
//            AdjustedService::run();
        } catch (Throwable $error) {
            $order->items()->detach();
            $order->delete();
            report($error);
            return false;
        }
        return $order;
    }

    private function getItem($itemArr)
    {
        // input misspelled word
        $input = $itemArr[1];

        // array of words to check against
        $words = Item::all()->map(function ($item) {
            return $item->name;
        })->all();

        // no shortest distance found, yet
        $shortest = -1;

        // loop through words to find the closest
        foreach ($words as $word) {

            // calculate the distance between the input word,
            // and the current word
            $lev = levenshtein($input, $word);

            // check for an exact match
            if ($lev == 0) {

                // closest word is this one (exact match)
                $closest = $word;
                $shortest = 0;

                // break out of the loop; we've found an exact match
                break;
            }

            // if this distance is less than the next found shortest
            // distance, OR if a next shortest word has not yet been found
            if ($lev <= $shortest || $shortest < 0) {
                // set the closest match, and shortest distance
                $closest = $word;
                $shortest = $lev;
            }
        }

        return Item::where('name', $closest)->first();
    }
}
