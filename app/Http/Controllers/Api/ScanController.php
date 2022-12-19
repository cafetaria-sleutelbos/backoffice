<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreScanRequest;
use App\Models\Scan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ScanController extends Controller
{
    public function store(StoreScanRequest $request)
    {
        $validated = $request->validated();
        $image_base64 = $validated['receipt_image'];
        if ($image_base64){
            $image_base64 = 'data:image/png;base64,'.$image_base64;
            $image_base64 = str_replace(' ', '+', $image_base64);
            $imageName = 'receipt_'.time().'.'.'png';
            Storage::disk('public')->put('receipts/'.$imageName, base64_decode($image_base64));
            Scan::create([
                'data' => $image_base64,
                'receipt_path' => 'receipts/'.$imageName
            ]);
            return response('Scan received WITH image', 200);
        }else{
            Scan::create([
                'data' => $validated['data'],
                'receipt_path' => null
            ]);
            return response('scan received WITH NO image', 200);
        }
    }
}
