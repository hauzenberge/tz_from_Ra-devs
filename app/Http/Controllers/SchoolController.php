<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\School;
use App\Staff;
use App\Files;
use Storage;

class SchoolController extends Controller
{
    public function index(){
        return view('school.index',[
            'schools' => School::all(),
        ]);
    }

    public function edit($id){
        return view('school.edit',[
            'id' =>$id,
            'school' => School::find($id),
        ]);
    }
    public function update($id, Request $request){
        $school = School::find($id);
        $school->name = $request->input('name');
        $school->email = $request->input('email');
        $school->website = $request->input('website');
        
        if ($request->file('logo') != null) {
            $school->logo = $request->file('logo')->store('public/logos');

            $school->save();
           return redirect('/school/edit/'.$id);
        }

        $school->save();
        return redirect('/school/edit/'.$id);
    }

    public function destroyLogo($id){
        $school = School::find($id);
        $destroy = new Files;
        $destroy->desletefile($school->logo);
        $school->logo = null;
        $school->save();

        return redirect('/school/edit/'.$id);

    }    

    public function destroy($id){
        $school = School::find($id);
        $destroy = new Files;
        $destroy->desletefile($school->logo);
        $staffs = Staff::where('school_id', '=', $id);
        $staffs->delete();
        $school->delete();
        return redirect('/school');
    }
    public function add(){
        return view('school.add');
    }
    public function store(Request $request){
        $school = new School;
        $school->name = $request->input('name');
        $school->email = $request->input('email');
        $school->website = $request->input('website');
        
        if ($request->file('logo') != null) {
            $school->logo = $request->file('logo')->store('public/logos');

            $school->save();
           return redirect('/school');
        }

        $school->save();

        return redirect('/school');
    }
}
