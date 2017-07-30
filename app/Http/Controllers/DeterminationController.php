<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apple;

class DeterminationController extends Controller
{

	public function index()
	{
		return view('determination');

	}
	public function getApples(Request $request)
	{

		$apples = Apple::All();
		$candidats = [];
		foreach ($apples as $apple) {
			if (Form::All()->where('user_id', '=', $user->id)->where('statut_form', '=', '1')->first()) {
				$candidats[]=$user;
			}
		}

		return view('listeCandidats', ['candidats'=>$candidats]);
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


}

