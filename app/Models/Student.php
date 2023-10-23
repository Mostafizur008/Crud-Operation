<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class Student extends Model
{
    public function department()
    {
        return $this->belongsTo(Department::class,'department_id','id');
    }
}
