<?php

namespace App\Http\Controllers;

use App\Imports\RoomImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportRoomController extends Controller
{
    public function import(Request $request)
    {
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('file_room', $nama_file);

        // import data
        Excel::import(new RoomImport, public_path('/file_room/' . $nama_file));

        // alihkan halaman kembali
        return redirect("/ruangan");
    }
}
