<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Parameter;
use App\Models\Response;

class SelectController extends Controller
{
   public function doctor(Request $request){
       $data = [];
       if($request->has('q')){
           $search = $request->q;
           $data = User::select("id","name")
               ->where('role', 'dokter')->where('name','LIKE',"%$search%")
               ->get();
       }else{
           $data =  User::select("id","name")
               ->where('role', 'dokter')->limit(5)->get();
       }
       return response()->json($data);
   }

    public function service(Request $request){
        $data = Service::all();
        if($request->has('q')){
            $search = $request->q;
            $data = Service::select("id","name")
                ->where('name','like',"%$search%")
                ->get();
        }
        return response()->json($data);

    }

    public function parameter(Request $request){
        $data = Parameter::all();
        if($request->has('q')){
            $search = $request->q;
            $data = Parameter::select("id","name")
            ->where('name','like',"%$search")
            ->get();
        }
        return response()->json($data);
    }

    public function response(Request $request){
        $data = Response::all();
        if($request->has('q')){
            $search = $request->q;
            $data = Response::select("id","success")
            ->where('success','like',"%$search")
            ->get();
        }
        return response()->json($data);
    }

    
}
