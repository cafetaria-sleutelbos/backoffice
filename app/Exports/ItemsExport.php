<?php

namespace App\Exports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ItemsExport implements FromCollection, WithHeadings
{
    use Exportable;

    public function collection()
    {
        ## 1. Export all data
        // return Employees::all();

        ## 2. Export specific columns
        return Item::select('id','name','cooking_time','complexity','price','created_at')->get();
    }

    public function headings(): array
    {
        return [
            '#',
            'name',
            'cooking_time',
            'complexity',
            'price',
            'created_at'
        ];
    }
}
