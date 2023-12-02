<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Subject extends Model
{
    use softDeletes;
    use HasFactory;
    public function classSubject(){
        return $this->hasMany(classSubject::class);
    }
    public function routine(){
        return $this->hasMany(Routine::class);
    }
    public function examresult(){
        return $this->hasMany(ExamResult::class);
    }
}
