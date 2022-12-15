<?php

namespace App\Http\Controllers;

use App\Exports\ScansExport;
use App\Models\Scan;
use Maatwebsite\Excel\Facades\Excel;
use League\Csv\Writer;


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

    public function export()
    {
        return Excel::download(new ScansExport, 'scans-' . time(). '.csv');
    }
}
