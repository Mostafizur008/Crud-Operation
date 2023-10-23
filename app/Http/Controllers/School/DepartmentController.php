<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function DepartmentView()
    {
        $data['allData'] = Department::all();
        return view('dashboard',$data);
    }
    public function DepartmentAdd()
    {
        return view('school.department.add');
    }

    public function DepartmentStore(Request $request)
    {
        $validateData = $request->validate([
            'department_name' => 'required',
        ]);
        $data = new Department();
        $data->department_name = $request->department_name;
        $data->save();
        return redirect()->route('dashboard');
    }

    public function DepartmentEdit($id)
    {
        $editData= Department::find($id);
        return view('school.department.edit',compact('editData'));
    }

    public function DepartmentUpdate(Request $request,$id)
    {
        $data = Department::find($id);
        $validateData = $request->validate([
            'name' => 'required'.$data->id,
        ]);
        $data->department_name = $request->department_name;
        $data->save();
        return redirect()->route('dashboard');
    }

    public function DepartmentDelete($id)
    {
        $data = Department::find($id);
        $data->delete();
        
        return redirect()->route('dashboard');
    }

}
