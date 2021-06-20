<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $table='exams';
    protected $fillable=['quiz_id','student','marks','grade','out_of','date_taken','date_computed','marked_by'];

    public function answers(){
    	return $this->hasMany('App\Models\Answer','exam_id','id');
    	// We are in the exam model. Thus, exam is "called" exam_id in the answer Model. If the relation is hasMany, we use the plural form eg answers

    }

    public function quiz(){
    	return $this->hasOne('App\Models\Quiz','id','quiz_id');
    }	
    
}
