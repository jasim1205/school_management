<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    use HasFactory;
    public function class(){
        return $this->belongsTo(Classes::class);
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
    public function period(){
        return $this->belongsTo(Period::class);
    }
    public function weekday(){
        return $this->belongsTo(WeekDay::class);
    }
}
