<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table='students';
    protected $fillable=['id''reg_no,''user_id'];

    public function user(){
    	return $this->hasOne('App\Models\User','id','user_id');
    }

    public function StudentCourse(){
    	return $this->hasMany('App\Models\StudentCourse','id','StudentCourse_id');
    }
}
