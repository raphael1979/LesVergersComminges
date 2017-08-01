<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Apple;
use App\synonyme;

class ModificationController extends Controller
{

	public function index()
	{
		return view('modification');

	}
	
	
}


