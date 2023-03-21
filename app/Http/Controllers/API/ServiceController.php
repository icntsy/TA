<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/service",
     *      operationId="getServiceList",
     *      tags={"Service"},
     *      summary="Get list of service",
     *      description="Returns list of service",
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
     *      path="/api/service",
     *      operationId="storeService",
     *      tags={"Service"},
     *      summary="Store new service",
     *      description="Returns service data",
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
     *      path="/api/service/id",
     *      operationId="getServiceById",
     *      tags={"Service"},
     *      summary="Get Service information",
     *      description="Returns service data",
     *      security={{ "bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="Service id",
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
     *      path="/api/service/id",
     *      operationId="updateService",
     *      tags={"Service"},
     *      summary="Update existing queue",
     *      description="Returns updated queue data",
     *      security={{ "bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="Service id",
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
     *      path="/api/service/id",
     *      operationId="deleteService",
     *      tags={"Service"},
     *      summary="Delete existing service",
     *      description="Deletes a record and returns no content",
     *      security={{ "bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="Service id",
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
        $service = Service::query()->get();
        if (count($service) == 0) {
            return response()->json(["message" => "Patient Kosong"]);
            }
            return response()->json($service);
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
            'name' => 'required'
        ]);
        $service = Service::create($request->all());
        return response()->json($service);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::where('id', $id)->first();
        if (!$service) {
        return response()->json(["message" => "Pelayanan tidak ditemukan"]);
        }
        return response()->json($service);
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
        $service = Service::find($id);

        $request->validate([
            'name' => 'required'
        ]);
        $service->update([
            'name' => $request->name
        ]);
        return response()->json($service);
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
        $service = Service::find($id)->delete();
        return response()->json($service);
    }
}
