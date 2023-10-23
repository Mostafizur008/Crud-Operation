<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Student;

class ResultController extends Controller
{
    public function ResultView(Request $request)
    {
        $results = DB::table('results');
        if ($request->keyword != null){
            $results = $results->orwhere('results.gpa','like','%'.$request->keyword.'%');
            $results = $results->orwhere('name','like','%'.$request->keyword.'%');
        }
        $results = $results
               ->select('results.*','name as studentName')
               ->leftJoin('students','students.id','results.student_id')
               ->get();
        return view ('school.result.view',['results'=>$results]);
    }

    public function ResultAdd()
    {
        $data['student'] = Student::all();
        return view('school.result.add',$data);
    }

    public function ResultStore(Request $request)
    {
        $validateData = $request->validate([
            'gpa' => 'required',
            'student_id' =>'max:191',
            
        ]);
        $data = new Result();
        $data->gpa = $request->gpa;
        $data->student_id = $request->student_id;
        $data->date = $request->date;
        $data->save();
        return redirect()->route('result');
    }

    public function ResultEdit($id)
    {
        $data['editData'] = Result::find($id);
        $data['student'] = Student::all();
        return view('school.result.edit',$data);
    }

    public function ResultUpdate(Request $request,$id)
    {
        $data = Result::find($id);
        $validateData = $request->validate([
            'gpa' => 'required',
            'student_id' =>'max:191',
            
        ]);
        $data->gpa = $request->gpa;
        $data->student_id = $request->student_id;
        $data->date = $request->date;
        $data->save();
        return redirect()->route('result');
    }

    public function ResultDelete($id)
    {
        $data = Result::find($id);
        $data->delete();
        
        return redirect()->route('result');
    }

}
