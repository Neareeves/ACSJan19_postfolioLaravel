<?php

namespace app\Http\Controllers;


use Illuminate\Http\Request;
use app\Projet as Projet;

class ProjetController extends Controller
{

    function returnView() {
    	return view('Projet');
    }
    function storeProjet(Request $request) {
    	$utilisateur = new Projet();
    	$utilisateur->titre=$request->name;
    	$utilisateur->principe=$request->sujet;
    	$utilisateur->save();
    	    // return redirect('/',['ok'=>"message"]);
    }

    function getProject() {
	$articles = testo::where('titre', 'principe')->get();
    }

}
