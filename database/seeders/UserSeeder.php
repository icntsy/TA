<?php

namespace Database\Seeders;

use App\Models\User;
use Dompdf\Frame\Factory;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list_user = [
            [
                "name" => "Admin",
                "email" => "admin@mail.com",
                "role" => "admin"
            ],
            [
                "name" => "Dr. Lestari",
                "email" => "dokter@mail.com",
                "role" => "dokter"
            ],
            [
                "name" => "Suryono",
                "email" => "staff@mail.com",
                "role" => "staff"
            ],
            [
                "name" => "Bidan. Duriah",
                "email" => "bidan@mail.com",
                "role" => "bidan"
            ],
            [
                "name" => "Dokumentasi",
                "email" => "dokumentasi@mail.com",
                "role" => "dokumentasi"
            ],
            [
                "name" => "Pengguna",
                "email" => "mamat@mail.com",
                "role" => "pengguna"
            ],
        ];

        foreach ($list_user as $user){
            User::factory(1)->create($user);
        }
    }
}
