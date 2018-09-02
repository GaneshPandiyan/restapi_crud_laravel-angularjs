<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;

class CatsController extends Controller
{

	// get all cats
	public function getallcats() {
		$cats = Cat::all ();
		return response()->json($cats , 201);
	}



  // add cats
	public function addcats(Request $request) {
		$cat = new Cat ();
		$cat->fill ( $request->all () );
		$cat->save ();
		return response()->json($cat, 201);
	}


	// get single cat
	public function getsinglecat($id) {
		$cat = Cat::find ( $id );
		if (! $cat) {
			return response()->json(['message' => 'Record not found.'], 404 );
		}
		return response()->json($cat, 200);
	}


    // update single cat
	public function updatesinglecat(Request $request, $id) {
		$cat = Cat::find ( $id );
		if (! $cat) {
			return response()->json(['message' => 'Record not found.'], 404 );
		}
		$cat->fill ( $request->all () );
		$cat->save ();
		return response()->json($cat, 200);
	}


    // delete all cats
	public function deletesinglecat($id) {
		$cat = Cat::find ( $id );
		if (! $cat) {
			return response()->json(['message' => 'Record not found.'], 404 );
		}
		$cat->delete ();
		return response()->json(['message' => 'Record was Deleted.'], 200 );
	}
}
