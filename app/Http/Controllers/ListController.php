<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apple;
use App\Synomyne;
use App\ImageGallery;
class listController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function getApples(Request $request)
    {

    	$apples = Apple::All();

    	

    	return view('list', ['apples'=>$apples]);
    }
    // public function getApples(Request $request)
    // {

    //     $apples = Apple::All();
    //     $images = ::All();
    //     $apples_img = [];
    //     $candidats = [];
    //     foreach (apples as $apple) {
    //         if (Apple::All()->where('user_id', '=', $user->id)->where('statut_form', '=', '1')->first()) {
    //             $candidats[]=$user;
    //         }
    //     }

    //     return view('listeCandidats', ['candidats'=>$candidats]);
    // }

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
        return view('description');
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
