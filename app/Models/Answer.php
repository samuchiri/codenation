<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $table='answers';
    protected $fillable =['instructions','exam_id','answer','marking','marks','question_id','is_correct'];

    public function exam(){
    	return $this->hasOne('App\Models\Exam','id','exam_id');
    }

    public function question(){
    	return $this->hasOne('App\Models\Question','id','question_id');
    }
}
