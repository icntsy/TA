<?php

namespace App\Exports;

use App\Models\Drug;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class DrugExport implements
    FromCollection,
    WithMapping,
    WithHeadings,
    WithStyles,
    ShouldAutoSize
{

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Drug::all();
    }

    public function map($row): array
    {
        return [
            $row->nama,
            // $row->takaran,
            // $row->keterangan,
            // $row->satuan,
            $row->stok,
            // $row->harga,
            $row->min_stok,
            $row->harga,
            // $row->expired_date,
            // $row->created_at
        ];
    }

    public function headings(): array
    {
        return [
            'Nama',
            // 'Takaran',
            // 'Keterangan',
            // 'Satuan',
            'Stok',
            // 'Harga',
            'Min Stok',
            'Harga'
            // 'Expire Date',
            // 'Created At'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => 'true']]
        ];
    }
}