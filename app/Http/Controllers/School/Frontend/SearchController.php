<?php

namespace App\Http\Controllers\School\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Result;

class SearchController extends Controller
{
    public function STView(Request $request)
    {
        $data = DB::table('students');
        if ($request->keyword != null){
            $data = $data->orwhere('students.name','like','%'.$request->keyword.'%');
            $data = $data->orwhere('departments.department_name','like','%'.$request->keyword.'%');
            $data = $data->orwhere('results.gpa','like','%'.$request->keyword.'%');
        }
        $data = $data
               ->join('results','results.student_id','=','students.id')
               ->leftJoin('departments','departments.id','students.department_id')
               ->select('students.name','departments.department_name','results.gpa')
               ->get();
       return view('welcome',['students'=>$data]);
    }

    public function RSView(Request $request)
    {
        $data = DB::table('results');
        if ($request->keyword != null){
            $data = $data->orwhere('students.name','like','%'.$request->keyword.'%');
            $data = $data->orwhere('departments.department_name','like','%'.$request->keyword.'%');
            $data = $data->orwhere('results.gpa','like','%'.$request->keyword.'%');
        }
        $data = $data
                   ->leftJoin('students','students.id','results.student_id')
                   ->leftJoin('departments','departments.id','students.department_id')
                   ->select('students.name','departments.department_name','results.gpa')
                   ->get();
       return view('result',['results'=>$data]);
    }
}
