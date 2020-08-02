<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoBoxController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('infobox.index');
    }
}
