<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Room;

class RoomController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/room",
     *      operationId="getRoomtList",
     *      tags={"Room"},
     *      summary="Get list of room",
     *      description="Returns list of room",
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
     *      path="/api/room",
     *      operationId="storeRoom",
     *      tags={"Room"},
     *      summary="Store new room",
     *      description="Returns room data",
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
     *      path="/api/room/id",
     *      operationId="getRoomById",
     *      tags={"Room"},
     *      summary="Get room information",
     *      description="Returns room data",
     *      security={{ "bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="Room id",
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
     *      path="/api/room/id",
     *      operationId="updateRoom",
     *      tags={"Room"},
     *      summary="Update existing room",
     *      description="Returns updated room data",
     *      security={{ "bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="Room id",
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
     *      path="/api/room/id",
     *      operationId="deleteRoom",
     *      tags={"Room"},
     *      summary="Delete existing room",
     *      description="Deletes a record and returns no content",
     *      security={{ "bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="Room id",
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
        $room = Room::query()->get();
        if (count($room) == 0) {
        return response()->json(["message" => "Room Kosong"]);
        }
        return response()->json($room);
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
            'price' => 'required',
            'status' => 'required'
        ]);
        $room = Room::create($request->all());
        return response()->json($room);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::where('id', $id)->first();
        if (!$room) {
        return response()->json(["message" => "Ruangan tidak ditemukan"]);
        }
        return response()->json($room);
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
        $room = Room::find($id);

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'status' => 'required'
        ]);
        $room->update([
            'name' => $request->name,
            'price' => $request->price,
            'status' => $request->status
        ]);

        return response()->json($room);
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
        $room = Room::find($id)->delete();
        return response()->json($room);
    }
}
