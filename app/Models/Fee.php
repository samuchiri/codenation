<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;
    protected $table='fees';
    protected $fillable=['amount','balance','due','status','student_id'];

    public function student(){
    	return $this->hasOne('App\Models\Student','id','student_id')
    }
}
