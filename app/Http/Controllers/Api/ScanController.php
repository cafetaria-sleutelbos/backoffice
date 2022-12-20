<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreScanRequest;
use App\Models\Scan;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ScanController extends Controller
{
    public function store(Request $request)
    {
//        $validated = $request->validated();
        $image_base64 = $request->get('receipt_image');
        if ($image_base64){
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
            Scan::create([
                'data' => $request->get('data'),
                'receipt_path' => $path
            ]);
            return response('Scan received WITH image: ' . $path, 200);
        }else{
            Scan::create([
                'data' => $request->get('data'),
                'receipt_path' => null
            ]);
            return response('scan received WITH NO image', 200);
        }
    }
}
