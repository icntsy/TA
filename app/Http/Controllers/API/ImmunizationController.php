<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\Immutable;
use \App\Models\Immunization;

class ImmunizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $immunization = Immunization::query()->get();
        if (count($immunization) == 0) {
        return response()->json(["message" => "Imunisasi Kosong"]);
        }
        return response()->json($immunization);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required',
            'weight' => 'required',
            'temperature' => 'required',
            'description' => 'required'
        ]);
        $immunization = Immunization::create($request->all());
        return response()->json($immunization);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $immunization = Immunization::where('id', $id)->first();
        if (!$immunization) {
        return response()->json(["message" => "Imunisasi tidak ditemukan"]);
        }
        return response()->json($immunization);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $immunization = Immunization::find($id);

        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required',
            'weight' => 'required',
            'temperature' => 'required',
            'description' => 'required'
        ]);
        $immunization->update([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'weight' => $request->weight,
            'temperature' => $request->temperature,
            'description' => $request->description
        ]);

        return response()->json($immunization);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $immunization = Immunization::find($id)->delete();
        return response()->json($immunization);
    }
}
