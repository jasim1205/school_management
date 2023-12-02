<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    public function examresult(){
        return $this->hasMany(ExamResult::class);
    }
    public function fresult(){
        return $this->hasMany(FinalResult::class);
    }
}
