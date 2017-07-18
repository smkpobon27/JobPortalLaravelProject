<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['title','description','requirement','language','skill','user_id','industry','city','country','salary','deadline','career_level','degree','experience','posted','drafted'];
}
