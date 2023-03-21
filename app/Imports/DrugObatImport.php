<?php

namespace App\Imports;

use App\Models\Drug;
use Maatwebsite\Excel\Concerns\ToModel;

class DrugObatImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Drug([
            "nama" => $row[0],
            "stok" => $row[1],
            "min_stok" => $row[2],
            "harga" => $row[3]
        ]);
    }
}
