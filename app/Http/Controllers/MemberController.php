<?php

namespace App\Http\Controllers;

use App\Models\MemberData;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function memberForm()
    {
        return view('web.form');
    }

    public function storeMemberData(Request $request)
    {

        $member = new MemberData();
        $member->fill($request->all());
        $dataSave = $member->save();

        if ($dataSave) {
            return 'data save';
        }
        return 'error';
    }
}
