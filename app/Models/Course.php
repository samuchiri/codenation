<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table='courses';
    protected $fillable=['name','description','image'];

    public function studentCourses(){
    	return $this->hasMany('App\Models\StudentCourse','course_id','id')->withDefault(['name'=>'Deleted']);
    }	
}
// We are in the Course model. Thus, course is "called" course_id in the studentCourse Model. If the relation is hasMany, we use the plural form eg studentCourses

