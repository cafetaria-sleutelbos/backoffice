<?php

namespace App\Http\Controllers;

use App\Exports\ScansExport;
use App\Http\Requests\UpdateScanRequest;
use App\Models\Scan;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;


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
    public function export()
    {
        return Excel::download(new ScansExport, 'scans-' . time(). '.csv');
    }
}
