<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['title','description','requirement','language','skill','user_id','industry','city','country','salary','deadline','career_level','degree','experience','posted','drafted'];

    //Job has one User
    public function user(){
    	return $this->belongsTo(User::class);
    }
    //A job has  many user
    public function many_user(){
    	return $this->belongsToMany(User::class)->withTimestamps();
    }
   
}
