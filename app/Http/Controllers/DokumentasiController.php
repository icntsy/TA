<?php

namespace App\Http\Controllers;

use App\Models\Documentation;
use App\Models\Patient;
use App\Models\Parameter;
use App\Models\Response;
use Illuminate\Http\Request;

class DokumentasiController extends Controller
{
    //
    public function index()
    {
         //get dokumentasi
        $data = Documentation::with('response', 'parameters')->get();
        $documentations_group = Documentation::groupBy('title')->select('title')->get();
        $documentations = $data->groupBy('title');
        for ($i=0; $i < count($documentations_group) ; $i++) {
            $title_doc = $documentations_group[$i]->title;
            foreach ($documentations as $key => $value) {
                if ($key == $title_doc) {
                    $documentations_group[$i]["result"] = $value;
                }
            }
        }
        //render view with dokumantasi
         return view('dokumentasi_api.index', compact(['documentations_group']));
    }
}
