<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class ClassSection extends Model
{
    use softDeletes;
    use HasFactory;

    public function class(){
        return $this->belongsTo(Classes::class);
    }

    public function section(){
        return $this->belongsTo(Section::class);
    }

    
    static public function getAlreadyFirst($class_id,$section_id)
    {
        return self::where('class_id','=',$class_id)->where('section_id','=',$section_id)->first();
    }
}
