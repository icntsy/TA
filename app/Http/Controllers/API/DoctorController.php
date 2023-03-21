<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/doctors",
     *      operationId="index",
     *      tags={"Doctor"},
     *      summary="Get Semua Data Dokter",
     *      security={{ "bearer_token":{}}},
     *      description="Get Semua Data Dokter",
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
     * @OA\Get(
     *      path="/api/doctors/{id}",
     *      operationId="getDoctorById",
     *      tags={"Doctor"},
     *      summary="Get doctor information",
     *      description="Returns doctor data",
     *      security={{ "bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="Doctor id",
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


    //
    public function index()
    {
        //
        $doctors = User::where("role","dokter")->get();
        if (count($doctors) == 0) {
            return response()->json(["message" => "Dokter Kosong"]);
        }
        return response()->json($doctors);
    }

    public function show($id)
    {
        $doctors = User::where('id', $id)->first();
        if (!$doctors) {
        return response()->json(["message" => "Dokter tidak ditemukan"]);
        }
        return response()->json($doctors);
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'email_verified_at' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
        $doctors = User::create($request->all());
        return response()->json($doctors);
    }

}
