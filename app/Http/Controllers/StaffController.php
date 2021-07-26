<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller
{
    public function index(){
        return view('staff.index',[
            'stafers' => Staff::all(),
        ]);
    }

    public function edit($id){
        return view('staff.edit',[
            'id' =>$id,
            'staff' => Staff::find($id),
        ]);
    }
    public function update($id, Request $request){
        $staff = Staff::find($id);
        $staff->first_name = $request->input('first_name');
        $staff->last_name = $request->input('last_name');
        $staff->email = $request->input('email');
        $staff->phone = $request->input('phone');
        $staff->school_id = $request->input('school');

        $staff->save();
        return redirect('/staff/edit/'.$id);
    } 

    public function destroy($id){
        $staffs = Staff::find($id);
        $staffs->delete();
        return redirect('/staff');
    }
    public function add(){
        return view('staff.add');
    }
    public function store(Request $request){
        $staff = new Staff;
        
        $staff->first_name = $request->input('first_name');
        $staff->last_name = $request->input('last_name');
        $staff->email = $request->input('email');
        $staff->phone = $request->input('phone');
        $staff->school_id = $request->input('school');

        $staff->save();

        return redirect('/staff');
    }
}
