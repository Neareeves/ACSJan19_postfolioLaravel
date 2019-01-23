<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
	    protected $fillable = [
        'titre', 'principe', 'tech','description','details','cahiercharges','illus','altimg','link','github',
    ];
   
   
}
