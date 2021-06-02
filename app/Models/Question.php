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
    	return $this->hasMany('App\Models\Answer','question_id','id');
    	// We are in the question model. Thus, question is "called" question_id in the answers Model. If the relation is hasMany, we use the plural form eg answers

    }
    public function choices(){
    	return $this->hasMany('App\Models\Choice','question_id','id');
    }
}
