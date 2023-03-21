<?php

namespace App\Http\Controllers;

use App\Imports\DiagnosisImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportDiagnosisController extends Controller
{
    public function import(Request $request)
    {
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('file_diagnosis', $nama_file);

        // import data
        Excel::import(new DiagnosisImport, public_path('/file_diagnosis/' . $nama_file));

        // alihkan halaman kembali
        return redirect("/diagnosis");
    }
}
