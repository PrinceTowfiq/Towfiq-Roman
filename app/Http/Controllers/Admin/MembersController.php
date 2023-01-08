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

    public function editMember(int $id)
    {
        $memberData = $this->getMemberById($id);
        return view('admin.memberEdit', compact('memberData'));
    }

    public function updateMember(Request $request, int $id)
    {
        $request->validate([
            'member_id' => 'required',
            'name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'mobile_number' => 'required',
            'whatsapp_number' => 'required',
            'email' => 'required',
            'bob' => 'required',
            'profession' => 'required',
            'designation' => 'required',
            'organization' => 'required',
            'blood_group' => 'required',
            'nid' => 'required',
            'tin' => 'required',
            'tshirt_size' => 'required',
            'present_address' => 'required',
            'address' => 'required',
            'permanent_address' => 'required',
            'cultural_engagement' => 'required',
        ]);
        $favorite_sports = json_encode($request->favorite_sports);

        $inputs = $request->except(['image', 'favorite_sports']);
        $inputs['favorite_sports'] = $favorite_sports;

        $member = $this->getMemberById($id);

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

    public function getMemberById(int $id)
    {
        return MemberData::findOrFail($id);
    }
}
