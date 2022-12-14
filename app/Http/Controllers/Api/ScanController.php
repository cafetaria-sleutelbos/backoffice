<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreScanRequest;
use App\Models\Scan;

class ScanController extends Controller
{
    public function store(StoreScanRequest $request)
    {
        $validated = $request->validated();

        Scan::create([
            'data' => $validated['scan']
        ]);

        return response('scan received', 200);
    }
}
