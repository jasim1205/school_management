<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAttendance extends Model
{
    use HasFactory;
    public function student()
    {
        return $this->belobgsTo(Student::class);
    }
    public function class(){
        return $this->belongsTo(Classes::class);
    }
}
