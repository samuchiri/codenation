<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table='questions';
    protected $fillable=['quiz_id','student','type','answer'];

    public function answer(){
    	return $this->hasMany('App\Models\Answer','answer_id','id');
    }
    public function choices(){
    	return $this->hasMany('App\Models\Choice','question_id','id');
    }
}
