<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Student extends Model
{
    use SoftDeletes;
    use HasFactory;

    public function role(){
        return $this->belongsTo(Role::class);
    }
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
    public function fresult(){
        return $this->hasMany(FinalResult::class);
    }
    public function studentfee(){
        return $this->hasMany(StudentFee::class);
    }
    public function stu_feepayment(){
        return $this->hasMany(StudentFeePayment::class);
    }
    public function feedetail(){
        return $this->hasMany(StudentFeeDetails::class);
    }
    static public function countStudents()
    {
        return self::query()->count();
    }
}
