<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class StudentFeePayment extends Model
{
    use softDeletes;
    use HasFactory;
    public function s_roll()
    {
        return $this->belongsTo(Student::class,'student_roll','id');
    }
    public function s_name()
    {
        return $this->belongsTo(Student::class,'student_name','id');
    }
    public function class(){
        return $this->belongsTo(Classes::class);
    }
    public function fee(){
        return $this->belongsTo(Fees::class);
    }
}
