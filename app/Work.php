<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['job_title','company_name','country','industry','job_role',    'activity','user_id'];
}
