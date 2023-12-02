<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Student extends Model
{
    use softDeletes;
    use HasFactory;

    public function section(){
        return $this->belongsTo(Section::class);
    }
    public function class(){
        return $this->belongsTo(Classes::class);
    }
    public function stuattendance(){
        return $this->hasMany(StudentAttendance::class);
    }
    public function examresult(){
        return $this->hasMany(ExamResult::class);
    }
}
