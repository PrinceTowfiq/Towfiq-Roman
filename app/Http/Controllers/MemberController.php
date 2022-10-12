<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function memberForm()
    {
        return view('form');
    }
}
