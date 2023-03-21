<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Drug;

class DrugController extends Controller
{


    /**
     * @OA\Get(
     *      path="/api/drugs",
     *      operationId="index",
     *      tags={"Drug"},
     *      summary="Get Semua Data Obat",
     *      security={{ "bearer_token":{}}},
     *      description="Get Semua Data Obat",
     *      @OA\Response(
     *        response=403,
     *        description="Forbidden"
     *     ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     * )
     */

     /**
     * @OA\Post(
     *      path="/api/drugs",
     *      operationId="storeDrug",
     *      tags={"Drug"},
     *      summary="Store new obat",
     *      description="Returns drug data",
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
     *      path="/api/drugs/id",
     *      operationId="getDrugsById",
     *      tags={"Drug"},
     *      summary="Get drug information",
     *      description="Returns drug data",
     *      security={{ "bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="Drug id",
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
     *      path="/api/drugs/id",
     *      operationId="updateDrug",
     *      tags={"Drug"},
     *      summary="Update existing drug",
     *      description="Returns updated drug data",
     *      security={{ "bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="Drug id",
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
     *      path="/api/drugs/id",
     *      operationId="deleteDrug",
     *      tags={"Drug"},
     *      summary="Delete existing drug",
     *      description="Deletes a record and returns no content",
     *      security={{ "bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="Drug id",
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
        $drugs = Drug::query()->get();
        if (count($drugs) == 0) {
        return response()->json([
            "message" => "Obat Kosong"
        ]);
        }
        return response()->json($drugs);
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
            'nama' => 'required',
            // 'keterangan' => 'required',
            'stok' => 'required',
            // 'harga' => 'required',
            'min_stok' => 'required',
            'harga' => 'required'
        ]);
        $drugs = Drug::create($request->all());
        return response()->json($drugs);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $drug = Drug::where('id', $id)->first();
        if (!$drug) {
        return response()->json(["message" => "Obat tidak ditemukan"]);
        }
        return response()->json($drug);
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
        $drug = Drug::find($id);

        $request->validate([
            'nama' => 'required',
            // 'keterangan' => 'required',
            'stok' => 'required',
            // 'harga' => 'required',
            'min_stok' => 'required',
            'harga' => 'required'
        ]);
        $drug->update([
            'nama' => $request->nama,
            // 'keterangan' => $request->keterangan,
            'stok' => $request->stok,
            // 'harga' => $request->harga,
            'min_stok' => $request->min_stok,
            'harga' => $request->harga
        ]);

        return response()->json($drug);
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
        $drugs = Drug::find($id)->delete();
        return response()->json($drugs);
    }
}