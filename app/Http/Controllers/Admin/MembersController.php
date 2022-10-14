<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MemberData;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        $members = MemberData::orderBy('id', 'ASC')->get();
        return view('admin.members', compact('members'));
    }
}
