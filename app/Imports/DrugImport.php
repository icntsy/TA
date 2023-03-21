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
            // 'takaran' => $row['takaran'],
            'keterangan' => $row['keterangan'],
            // 'satuan' => $row['satuan'],
            'stok' => $row['stok'],
            'harga' => $row['harga'],
            'min_stok' => $row['min_stok'],
            'expire_date' => $row['expire_date'],
        ]);
    }
}
