<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Models\Patient;

class PatientController extends Controller
{

    /**
     * @OA\Get(
     *      path="/api/patient",
     *      operationId="getPatientList",
     *      tags={"Patient"},
     *      summary="Get list of patient",
     *      description="Returns list of patient",
     *      security={{ "bearer_token":{}}},
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */

     /**
     * @OA\Post(
     *      path="/api/patient",
     *      operationId="storePatient",
     *      tags={"Patient"},
     *      summary="Store new patient",
     *      description="Returns patient data",
     *      security={{ "bearer_token":{}}},
     *      @OA\Parameter(
     *          name="name",
     *          description="name",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="nik,",
     *          description="nik",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden",
     *      )
     * )
     */

     /**
      * * @OA\Get(
     *      path="/api/patient/id",
     *      operationId="getPatientById",
     *      tags={"Patient"},
     *      summary="Get patien information",
     *      description="Returns patient data",
     *      security={{ "bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="Patient id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     * )
     */

     /**
     * @OA\Put(
     *      path="/api/patient/id",
     *      operationId="updatePatient",
     *      tags={"Patient"},
     *      summary="Update existing patient",
     *      description="Returns updated patient data",
     *      security={{ "bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="Patient id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *      ),
     *      @OA\Response(
     *          response=202,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */

     /**
     * @OA\Delete(
     *      path="/api/patient/id",
     *      operationId="deletePatient",
     *      tags={"Patient"},
     *      summary="Delete existing patient",
     *      description="Deletes a record and returns no content",
     *      security={{ "bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="Patient id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=204,
     *          description="Successful operation",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
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
        $patient = Patient::query()->get();
        if (count($patient) == 0) {
        return response()->json(["message" => "Patient Kosong"]);
        }
        return response()->json($patient);
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
            'nik' => 'required',
            'gender' => 'required',
            'birth_date' => 'required',
            'address' => 'required',
            'profession' => 'required',
            'study' => 'required',
            'bpjs_number' => 'required',
            'phone_number' => 'required',
            'allergy' => 'required'
        ]);
        $patient = Patient::create($request->all());
        return response()->json($patient);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::where('id', $id)->first();
        if (!$patient) {
        return response()->json(["message" => "Pasien tidak ditemukan"]);
        }
        return response()->json($patient);
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
        $patient = Patient::find($id);

        $request->validate([
            'name' => 'required',
            'nik' => 'required',
            'gender' => 'required',
            'birth_date' => 'required',
            'address' => 'required',
            'profession' => 'required',
            'study' => 'required',
            'bpjs_number' => 'required',
            'phone_number' => 'required',
            'allergy' => 'required'
        ]);
        $patient->update([
            'name' => $request->name,
            'nik' => $request->nik,
            'gender' => $request->gender,
            'birth_date' => $request->birth_date,
            'address' => $request->address,
            'profession' => $request->profession,
            'study' => $request->study,
            'bpjs_number' => $request->bpjs_number,
            'phone_number' => $request->phone_number,
            'allergy' => $request->allergy
        ]);

        return response()->json($patient);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Request $request)
    // {
    //     //
    //     $id = $request->input('id');
    //     Patient::find('id')->delete();

    // }
    public function destroy($id)
    {
        //
        $patient = Patient::find($id)->delete();
        return response()->json($patient);

    }
}
