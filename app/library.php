<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class library extends Model
{
    protected $fillable = ['isbn','ttl','author','category','edition','price','stock'];
}
