<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class StudentFee extends Model
{
    use softDeletes;
    use HasFactory;
    public function student(){
        return $this->belongsTo(Student::class);
    }
    public function class(){
        return $this->belongsTo(Classes::class);
    }
}
