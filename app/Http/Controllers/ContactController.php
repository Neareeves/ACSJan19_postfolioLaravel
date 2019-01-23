<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use app\Contact as Contact;

class ContactController extends Controller
{
    function returnView() {
    	return view('Contact');
    }
    
    function storeProjet(Request $request) {
        $contacter = new Contact();
        $contacter->name=$request->name;
        $contacter->sujet=$request->sujet;
        $contacter->mail=$request->mail;
        $contacter->numero=$request->numero;
        $contacter->message=$request->message;
        $contacter->save();
            // return redirect('/',['ok'=>"message"]);

// )        [
//     'titre' => request('name'),
//     'principe' => bcrypt(request('sujet')),
// ]
        // echo request('name');
    
    }
}
