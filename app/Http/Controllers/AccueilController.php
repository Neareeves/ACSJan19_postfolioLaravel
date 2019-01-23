<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

class Accueil extends Controller
{
    function returnView() {
    	return view('Accueil');
    }
    function discoucou() {
    	echo 'coucou';
    }
}
