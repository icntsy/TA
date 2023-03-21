<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Familyplanning;
use Illuminate\Http\Request;

class FamilyplanningController extends Controller
{
    /**
     * @OA\SecurityScheme(
     *      securityScheme="bearer_token",
     *      type="http",
     *      scheme="bearer",
     *      bearerFormat="JWT",
     * )
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $familyplanning = Familyplanning::query()->get();
        if (count($familyplanning) == 0) {
        return response()->json(["message" => "Keluarga berencana Kosong"]);
        }
        return response()->json($familyplanning);
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
            'weight' => 'required',
            'blood_pressure' => 'required',
            'description' => 'required'
        ]);
        $familyplanning = Familyplanning::create($request->all());
        return response()->json($familyplanning);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $familyplanning = Familyplanning::find($id);

        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'weight' => 'required',
            'blood_pressure' => 'required',
            'description' => 'required'
        ]);
        $familyplanning->update([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'weight' => $request->weight,
            'blood_pressure' => $request->blood_pressure,
            'description' => $request->description
        ]);

        return response()->json($familyplanning);
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
        $familyplanning = Familyplanning::find($id)->delete();
        return response()->json($familyplanning);
    }
}

