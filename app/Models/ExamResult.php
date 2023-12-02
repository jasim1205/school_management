<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class ExamResult extends Model
{
    use softDeletes;
    use HasFactory;
    public function exam(){
        return $this->belongsTo(Exam::class);
    }
    public function student(){
        return $this->belongsTo(Student::class);
    }
    public function class(){
        return $this->belongsTo(Classes::class);
    }
    public function section(){
        return $this->belongsTo(Section::class);
    }
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
    public function session(){
        return $this->belongsTo(Session::class);
    }
}
