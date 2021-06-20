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
    	return $this->hasOne('App\Models\Student','id','student_id');
    }
}
//When deciding whether we can create another model, ask yourself whether
// the infomation can be gotten from other models, google(eg location) or from the user
// If the info(fields) can be gotten from other models, consider creating the model.
// If the info can be gotten from the user or from google(eg place_id) there is no need to 
// create a Place Model since place cannot be pulled from the database tables but from google.