<?php

namespace App\Imports;

use App\Models\Lab;
use Maatwebsite\Excel\Concerns\ToModel;

class LabImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Lab([
            "nama" => $row[0],
            "harga" => $row[1],
            "satuan" => $row[2]
        ]);
    }
}
