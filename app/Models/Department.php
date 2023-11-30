<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Department extends Model
{
    use softDeletes;
    use HasFactory;


    public function teacher(){
        return $this->hasMany(Teacher::class);
    }
}
