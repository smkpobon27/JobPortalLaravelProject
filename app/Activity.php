<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['location', 'user_id','college','degree','field','grade','language','interest','country','about_me','gender'];
}