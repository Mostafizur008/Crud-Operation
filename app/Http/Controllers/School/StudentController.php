<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Student;


class StudentController extends Controller
{

    public function StudentView(Request $request)
    {
        $students = DB::table('students');
        if ($request->keyword != null){
            $students = $students->orwhere('students.name','like','%'.$request->keyword.'%');
            $students = $students->orwhere('department_name','like','%'.$request->keyword.'%');
            $students = $students->orwhere('students.batch_name','like','%'.$request->keyword.'%');
        }
        $students = $students
               ->select('students.*','department_name as departmentName')
               ->leftJoin('departments','departments.id','students.department_id')
               ->get();
        return view ('school.student.view',['students'=>$students]);
    }

    public function StudentAdd()
    {
        $data['department'] = Department::all();
        return view('school.student.add',$data);
    }
    public function StudentStore(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'department_id' =>'max:191',
            'batch_name' => 'required',
            
        ]);
        $data = new Student();
        $data->name = $request->name;
        $data->department_id = $request->department_id;
        $data->batch_name = $request->batch_name;
        $data->save();
        return redirect()->route('student');
    }

    public function StudentEdit($id)
    {
        $data['editData'] = Student::find($id);
        $data['department'] = Department::all();
        return view('school.student.edit',$data);
    }

    public function StudentUpdate(Request $request,$id)
    {
        $data = Student::find($id);
        $validateData = $request->validate([
            'name' => 'required',
            'department_id' => 'max:191',
            'batch_name' => 'required',
            
        ]);
        $data->name = $request->name;
        $data->department_id = $request->department_id;
        $data->batch_name = $request->batch_name;
        $data->save();
        return redirect()->route('student');
    }

    public function StudentDelete($id)
    {
        $data = Student::find($id);
        $data->delete();
        
        return redirect()->route('student');
    }


}
