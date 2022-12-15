<?php

namespace App\Http\Controllers;

use App\Exports\ScansExport;
use App\Models\Scan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use League\Csv\Writer;


class ScanController extends Controller
{
    public function index()
    {
        $scans = Scan::all();
        return view('scans.index', ['scans' => $scans]);
    }

    public function export()
    {
        return Excel::download(new ScansExport, 'scans-' . time(). '.csv');
    }
}
