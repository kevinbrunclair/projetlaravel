<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }
}


/**
 * Handle the incoming request.
 *
 * @param \Illuminate\Http\Request $request
 * @return \Illuminate\Http\Response
 */



