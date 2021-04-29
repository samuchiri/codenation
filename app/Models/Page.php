<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $table='pages';
    protected $fillable=['module_id','title','notes','order','quiz_id'];

    public function module(){
    	return $this->hasOne('App\Models\Module','id','module_id');

    public function quiz(){
    	return $this->hasOne('App\Models\Quiz','id','quiz_id');
    }
    }
}
