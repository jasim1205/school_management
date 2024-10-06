<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Teacher extends Model
{
    use SoftDeletes;
    use HasFactory;
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }
    public function routine()
    {
        return $this->hasMany(Routine::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function teacherAtt()
    {
        return $this->hasMany(TeacherAttendance::class);
    }
    static public function countTeachers()
    {
        return self::query()->count();
    }
}
