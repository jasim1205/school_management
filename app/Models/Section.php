<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Section extends Model
{
    use softDeletes;
    use HasFactory;

    public function classSection(){
        return $this->hasMany(ClassSection::class);
    }
    public function student(){
        return $this->hasMany(Student::class);
    }
}
