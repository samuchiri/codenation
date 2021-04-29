<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $table='exams';
    protected $fillable=['quiz_id','student','marks','grade','out_of','date_taken','date_computed','marked_by'];

    public function answer(){
    	return $this->hasMany('App\Models\Answer','id','answer_id');
    }

    public function quiz(){
    	return $this->hasOne('App\Models\Quiz','id','quiz_id');
    }	
    
}
