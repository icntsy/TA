<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create fake patient
        Patient::create([
            'name' => 'Fake User Data1',
            'nik' => '123456789',
            'gender' => 'Laki-Laki',
            'birth_date' => now(),
            'address' => 'Jl. Kebon Jeruk No.1',
            'profession' => 'Petani',
            'study' => 'SD',
        ]);
    }
}
