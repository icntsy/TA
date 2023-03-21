<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Queue;

class QueueController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/queue",
     *      operationId="getQueueList",
     *      tags={"Queue"},
     *      summary="Get list of queue",
     *      description="Returns list of queue",
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
     *      path="/api/queue",
     *      operationId="storeQueue",
     *      tags={"Queue"},
     *      summary="Store new queue",
     *      description="Returns queue data",
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
     *      path="/api/queue/id",
     *      operationId="getQueueById",
     *      tags={"Queue"},
     *      summary="Get queue information",
     *      description="Returns queue data",
     *      security={{ "bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="Queue id",
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
     *      path="/api/queue/id",
     *      operationId="updateQueue",
     *      tags={"Queue"},
     *      summary="Update existing queue",
     *      description="Returns updated queue data",
     *      security={{ "bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="Queue id",
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
     *      path="/api/queue/id",
     *      operationId="deleteQueue",
     *      tags={"Queue"},
     *      summary="Delete existing queue",
     *      description="Deletes a record and returns no content",
     *      security={{ "bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="Queue id",
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
        $queue = Queue::query()->get();
        if(count($queue) == 0) {
            return response()->json(["message" => "Antrian Kosong"]);
            }
            return response()->json($queue);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $queue = Queue::where('id', $id)->first();
        if (!$queue) {
        return response()->json(["message" => "Antrian tidak ditemukan"]);
        }
        return response()->json($queue);
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
    }
}
