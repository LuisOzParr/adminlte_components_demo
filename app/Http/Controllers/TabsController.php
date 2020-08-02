<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('tabs.index');
    }
}
