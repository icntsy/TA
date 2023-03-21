<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Diagnosis;

class DiagnosisController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/diagnosis",
     *      operationId="getDiagnosisList",
     *      tags={"Diagnosis"},
     *      summary="Get list of diagnosis",
     *      description="Returns list of diagnosis",
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
     *      path="/api/diagnosis",
     *      operationId="storeDiagnosis",
     *      tags={"Diagnosis"},
     *      summary="Store new diagnosis",
     *      description="Returns diagnosis data",
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
     *      path="/api/diagnosis/id",
     *      operationId="getDiagnosisById",
     *      tags={"Diagnosis"},
     *      summary="Get diagnosis information",
     *      description="Returns diagnosis data",
     *      security={{ "bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="diagnosis id",
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
     *      path="/api/diagnosis/id",
     *      operationId="updateDiagnosis",
     *      tags={"Diagnosis"},
     *      summary="Update existing diagnosis",
     *      description="Returns updated diagnosis data",
     *      security={{ "bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="Diagnosis id",
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
     *      path="/api/diagnosis/id",
     *      operationId="deleteDiagnosis",
     *      tags={"Diagnosis"},
     *      summary="Delete existing diagnosis",
     *      description="Deletes a record and returns no content",
     *      security={{ "bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="Diagnosis id",
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
        $diagnosis = Diagnosis::query()->get();
        if (count($diagnosis) == 0) {
        return response()->json(["message" => "Diagnosis Kosong"]);
        }
        return response()->json($diagnosis);
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
            'code' => 'required',
            'icc_code' => 'required',
            'diagnosis' => 'required'
        ]);
        $diagnosis = Diagnosis::create($request->all());
        return response()->json($diagnosis);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diagnosis = Diagnosis::where('id', $id)->first();
        if (!$diagnosis) {
        return response()->json(["message" => "Data diagnosis tidak ditemukan"]);
        }
        return response()->json($diagnosis);
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
        $diagnosis = Diagnosis::find($id);

        $request->validate([
            'code' => 'required',
            'icc_code' => 'required',
            'diagnosis' => 'required'
        ]);
        $diagnosis->update([
            'code' => $request->code,
            'icc_code' => $request->icc_code,
            'diagnosis' => $request->diagnosis
        ]);

        return response()->json($diagnosis);
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
        $diagnosis = Diagnosis::find($id)->delete();
        return response()->json($diagnosis);
    }
}
