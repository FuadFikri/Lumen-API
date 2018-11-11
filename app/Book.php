<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    
    protected $guard = ['id'];
    protected $fillable = ['title','year','author','city','publisher'];
}
