<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class people extends Model
{
     protected $fillable = ['id','user_name','email','nid','phone','address','password'];
}