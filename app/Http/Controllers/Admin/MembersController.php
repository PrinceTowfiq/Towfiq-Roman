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

    public function exportCsv()
    {
        $members = MemberData::orderBy('id', 'ASC')->get();
        $fileName = time() . '.csv';

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('Name', 'Member ID', 'Father\'s Name', 'Mother\'s Name', 'Mobile No', 'Whatsapp No', 'Email', 'Date of Birth', 'Spouse Name', 'Spouse Date of Birth', 'Anniversary Date', 'Profession', 'Organization', 'Blood Group', 'NID Number', 'TIN Number', 'T-shirt Size', 'Address (Where CECL will Communicate)', 'Present address', 'Permanent address', 'Cultural Engagement', 'Membership ID (referred by)');

        $callback = function () use ($members, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($members as $task) {
                $row['Name']    = $task->name;
                $row['Member ID']  = $task->member_id;
                $row['Father\'s Name']    = $task->father_name;
                $row['Mother\'s Name']  = $task->mother_name;
                $row['Mobile No']  = $task->mobile_number;
                $row['Whatsapp No']  = $task->whatsapp_number;
                $row['Email']  = $task->email;
                $row['Date of Birth']  = $task->bob;
                $row['Spouse Name']  = $task->spouse_name;
                $row['Spouse Date of Birth']  = $task->spouse_dob;
                $row['Anniversary Date']  = $task->anniversary_date;
                $row['Profession']  = $task->profession;
                $row['Organization']  = $task->organization;
                $row['Blood Group']  = $task->blood_group;
                $row['NID Number']  = $task->nid;
                $row['TIN Number']  = $task->tin;
                $row['T-shirt Size']  = $task->tshirt_size;
                $row['Address (Where CECL will Communicate)']  = $task->address;
                $row['Present address']  = $task->present_address;
                $row['Permanent address']  = $task->permanent_address;
                $row['Cultural Engagement']  = $task->cultural_engagement;
                $row['Membership ID (referred by)']  = $task->membership;

                fputcsv($file, array($row['Name'], $row['Member ID'], $row['Father\'s Name'], $row['Mother\'s Name'], $row['Mobile No'], $row['Whatsapp No'], $row['Email'], $row['Date of Birth'], $row['Spouse Name'], $row['Spouse Date of Birth'], $row['Anniversary Date'], $row['Profession'], $row['Organization'], $row['Blood Group'], $row['NID Number'], $row['TIN Number'], $row['T-shirt Size'], $row['Address (Where CECL will Communicate)'], $row['Present address'], $row['Permanent address'], $row['Cultural Engagement'], $row['Membership ID (referred by)']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
