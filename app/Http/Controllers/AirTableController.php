<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirTableController extends Controller
{
    public function showSupports ()
    {
    	return view('showSupports');
    }

    public function showInnovations ()
    {
    	return view('showInnovations');
    }
}
