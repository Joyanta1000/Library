<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $fillable = ['id','admin_name','email','phone','address','password'];
}
