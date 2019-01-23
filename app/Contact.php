<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name','sujet','mail','numero','message'];
   	public $timestamps = false;
}
