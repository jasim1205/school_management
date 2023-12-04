<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    use HasFactory;
    
    public function stu_feepayment(){
        return $this->hasMany(StudentFeePayment::class);
    }
    public function feedetail(){
        return $this->hasMany(StudentFeeDetails::class);
    }
}
