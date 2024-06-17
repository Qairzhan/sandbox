<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['subject_name'];

    public function students(){
        return $this->belongsToMany(Student::class,'student_subject_pivot_table','subject_id','student_id');
        //SELECT *
        //FROM `students`
        //INNER JOIN `student_subject_pivot_table`
        //    ON `students`.`id` = `student_subject_pivot_table`.`student_id`
        //WHERE `student_subject_pivot_table`.`subject_id` = ?
    }
}
