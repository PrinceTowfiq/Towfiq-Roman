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

        $inputs = $request->except(['image']);

        $member = new MemberData();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/', $filename);
            $inputs['image'] = $filename;
        }
        $member->fill($inputs);
        $dataSave = $member->save();

        if ($dataSave) {
            return redirect()->back()->with('success', 'Member information successfully save.');
        }
        return redirect()->back()->with('error', 'Something wrong, please try again.');
    }
}
