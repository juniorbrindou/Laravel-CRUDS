<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internaute extends Model
{
    protected $fillable = ['name','firstname','email','age'];
}
