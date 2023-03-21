<?php

namespace App\Imports;

use App\Models\Diagnosis;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DiagnosisImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Diagnosis([
            'code' => $row['kode_diagnosa'],
            'icc_code' => $row['jenis_kode'],
            'diagnosis' => $row['diagnosa']
        ]);
    }
}
