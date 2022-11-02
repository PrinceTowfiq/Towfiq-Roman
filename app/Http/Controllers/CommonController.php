<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function virtualTour()
    {
        return view('web.virtual_ture');
    }
}
