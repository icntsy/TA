<?php

namespace App\Http\Controllers;

use App\Imports\DrugObatImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportObatController extends Controller
{
    public function import(Request $request)
    {
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('file_drug', $nama_file);

        // import data
        Excel::import(new DrugObatImport, public_path('/file_drug/' . $nama_file));

        // alihkan halaman kembali
        return redirect("/obat");
    }
}
