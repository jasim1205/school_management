<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Model
{
    use SoftDeletes;
    use HasFactory;

    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class,'teacher_id','id');
    }
}
