<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $table='quizzes';
    protected $fillable=['id','title','description','duration','total_marks'];


    public function exam(){
    	return $this->hasMany('App\Model\exam','quiz_id','id');
    }
}
