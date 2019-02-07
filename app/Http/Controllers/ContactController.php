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
        if ($request->input('name.0') !== NULL) {
        // $name = $request->input('name.0');
        $contacter = new Contact();
        $contacter->name=$request->input('name.0');
        $contacter->sujet=$request->input('sujet.0');
        $contacter->mail=$request->input('mail.0');
        $contacter->numero=$request->input('numero.0');
        $contacter->message=$request->input('message.0');
        $contacter->save();
       
            
        } else if ($request->input('name.1') !== NULL) {
        $contacter = new Contact();
        $contacter->name=$request->input('name.1');
        $contacter->sujet=$request->input('sujet.1');
        $contacter->mail=$request->input('mail.1');
        $contacter->numero=$request->input('numero.1');
        $contacter->message=$request->input('message.1');
        $contacter->save();
        }
        return view('Accueil');
     
 // $name = $request->input('name.0');
 //        $contacter = new Contact();
 //        $contacter->name=$request->name;
 //        $contacter->sujet=$request->sujet;
 //        $contacter->mail=$request->mail;
 //        $contacter->numero=$request->numero;
 //        $contacter->message=$request->message;
 //        $contacter->save();
 //        echo $contacter;
//             return redirect('/',['ok'=>"message"]);

//        [
//     'titre' => request('name'),
//     'principe' => bcrypt(request('sujet')),
// ];
//         echo request('name');
    
    }
}
