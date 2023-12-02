<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Classes extends Model
{
    use softDeletes;
    use HasFactory;
    public function classSubject(){
        return $this->hasMany(classSubject::class);
    }
    public function classSection(){
        return $this->hasMany(ClassSection::class);
    }
    public function routine(){
        return $this->hasMany(Routine::class);
    }
    public function student(){
        return $this->hasMany(Student::class);
    }
    public function stuattendance(){
        return $this->hasMany(StudentAttendance::class);
    }
    public function examresult(){
        return $this->hasMany(ExamResult::class);
    }
}
