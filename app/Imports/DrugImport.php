<?php

namespace App\Imports;

use App\Models\Drug;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class DrugImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Drug([
            'nama' => $row['nama'],
            'keterangan' => $row['keterangan'],
            'stok' => $row['stok'],
            // 'harga' => $row['harga'],
            'min_stok' => $row['min_stok'],
            'harga' => $row['harga'],
            // 'expire_date' => $row['expire_date'],
        ]);
    }
}