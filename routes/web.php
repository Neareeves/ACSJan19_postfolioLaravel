<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return View::make('Home');
});
Route::get('/projet','ProjetController@returnView');
Route::get('/projets','ProjetController@all')->name('formulaire');
// Route::get('/projet', function() {
// return view('Projet');
// });

Route::get('/home', function() {
	return view('Home');
})->name('home');

Route::get('/accueil', function() {
	return view('Accueil');
})->name('accueil');

Route::get('/contact', function() {
	return view('Contact');
})->name('contact');

// Route::get('CVang', function() {
// 	return redirect (à creuser);
// });

// Route::post('/projets', 'ContactController@store')->name('inscript');

// Route::post('/inscription', function () {
//     $utilisateur = App\Projet::create([
//         'titre' => request('name'),
//         'principe' => bcrypt(request('sujet')),
//     ]);   
//     return "Nous avons reçu votre email qui est " . request('name') . ' et votre mot de passe est ' . request('sujet');
// })->name('inscription');
Route::post('/inscription','ContactController@storeProjet')->name('inscription');

Route::get('/contacter', 'ContacterController@returnView')->name('Contacter');
Route::get('/zut', 'Accueil@returnView')->name('Contacter');
