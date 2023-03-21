<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


/**
 * @AO\Post(
 *	path="/api/home",
 *	summary="Home data",
*	description="",
*	tags={"Home"},
*	@AO\Parameter(
*		name="name",
*		in="query",
*		description="http://ekliniksimple.test/docs/api-docs.json",
*		required=true,
*	),
*	@AO\Response(
*		response=200,
*		description="OK",
*		@AO\MediaType(
*			mediaType="aplication/json",
*		)
*	),
* )
*/

class HomeController extends Controller
{
    //
    public function index(Request $request)
	{
		return response()->json([
			'name' => $request->input('name'),
			'message' => 'Hello Word!',
		]);
	}
}
