<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $table='modules';
    protected $fillable=['course_id','title','description'];

    public function course(){
    	return $this->hasOne('App\Models\Course','id','course_id');
    }
}
