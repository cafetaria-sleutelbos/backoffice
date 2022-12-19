<?php

namespace App\Http\Controllers;

use App\Exports\ScansExport;
use App\Http\Requests\UpdateScanRequest;
use App\Models\Scan;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use ZipArchive;


class ScanController extends Controller
{
    public function index()
    {
        $scans = Scan::all();
        return view('scans.index', ['scans' => $scans]);
    }

    public function show(Scan $scan){
        return view('scans.show', ['scan' => $scan]);
    }

    public function update(UpdateScanRequest $request, Scan $scan){
        $validated = $request->validated();
        $scan->update([
            'data' => $validated['data']
        ]);
        return redirect('/scans/' . $scan->id);
    }
    public function destroy(Scan $scan)
    {
        Storage::disk('public')->delete(str_replace('storage/', '', $scan->receipt_path ));
        $scan->delete();

        return redirect('/scans');
    }
    public function downloadImages()
    {
        $zip_file = 'receipt_images_'.time().'.zip';
        $zip = new \ZipArchive();
        $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

        $path = storage_path('app\public\receipts');
        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));
        foreach ($files as $name => $file)
        {
            // We're skipping all subfolders
            if (!$file->isDir()) {
                $filePath = $file->getRealPath();

                // extracting filename with substr/strlen
                $relativePath = 'receipts/' . substr($filePath, strlen($path) + 1);
                $zip->addFile($filePath, $relativePath);
            }
        }
        $zip->close();
        return response()->download($zip_file);
    }
    public function export()
    {
        return Excel::download(new ScansExport, 'scans-' . time(). '.csv');
    }
}
