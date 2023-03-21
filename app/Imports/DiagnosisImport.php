<?php

namespace App\Imports;

use App\Models\Diagnosis;
use Maatwebsite\Excel\Concerns\ToModel;

class DiagnosisImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Diagnosis([
            'category' => $row[0],
            'subcategory' => $row[1],
            'english_name' => $row[2],
            'indonesian_name' => $row[3]
        ]);
    }
}
