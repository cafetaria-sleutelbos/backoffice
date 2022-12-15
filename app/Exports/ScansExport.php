<?php

namespace App\Exports;

use App\Models\Scan;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ScansExport implements FromCollection, WithHeadings
{
    use Exportable;

    public function collection()
    {
        ## 1. Export all data
        // return Employees::all();

        ## 2. Export specific columns
        return Scan::select('id','data','created_at')->get();

    }

    public function headings(): array
    {
        return [
            '#',
            'data',
            'created_at'
        ];
    }
}
