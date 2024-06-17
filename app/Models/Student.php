<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['fullname'];

    public function subjects(){
        return $this->belongsToMany(Subject::class,'student_subject_pivot_table','student_id','subject_id');
    }
}
