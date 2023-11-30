<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class classSubject extends Model
{
    use softDeletes;
    use HasFactory;

    public function class(){
        return $this->belongsTo(Classes::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    
    static public function getAlreadyFirst($class_id,$subject_id)
    {
        return self::where('class_id','=',$class_id)->where('subject_id','=',$subject_id)->first();
    }

}
