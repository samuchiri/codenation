<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table='payments';
    protected $fillable=['amount','student_id'];

    public function student(){
    	return $this->hasOne('App\Models\Student','id','student_id');
    }
}
           