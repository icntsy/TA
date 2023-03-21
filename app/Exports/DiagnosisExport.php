<?php

namespace App\Exports;

use App\Models\Diagnosis;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class DiagnosisExport implements FromCollection, WithMapping,
    WithHeadings, WithStyles,
    ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Diagnosis::all();
    }

    public function headings(): array
    {
        return [
          'Kode Diagnosa',
          'Jenis Kode',
          'Diagnosa'
        ];
    }

    public function map($row): array
    {
        return [
            $row->code,
            $row->icc_code,
            $row->diagnosis
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return[
            1 => ['font' => ['bold' => 'true']]
        ];
    }
}
