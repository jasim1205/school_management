<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class WeekDay extends Model
{
    use softDeletes;
    use HasFactory;
    public function routine(){
        return $this->hasMany(Routine::class);
    }
}
