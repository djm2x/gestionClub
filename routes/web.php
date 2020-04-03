<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'ControleurMembres@index');

Route::get('/hello', function () {
    echo '<h1>Bonjour !</h1>';
});

Route::get('/bonjour/{nom}', function ($nom) {
    echo "Bonjour " . $nom;
});

Route::get('/', 'MonControleur@retourneNouvellePage');
Route::get('exemple', 'MonControleur@retournePageExemple');

//listing
Route::get('membres', 'ControleurMembres@index');

// post
Route::get('creer', 'ControleurMembres@creer')->middleware('auth');
Route::post('creation/membre', 'ControleurMembres@enregistrer')->middleware('auth');

//changeStatusAccount
Route::get('nouvellesDemandes', 'ControleurMembres@nouvellesDemandes');
Route::get('changeStatusAccount/{id}', 'ControleurMembres@changeStatusAccount')->middleware('auth');

//patch
Route::get('modifier/{id}', 'ControleurMembres@editer')->middleware('auth');
Route::patch('miseAJour/{id}', 'ControleurMembres@miseAJour')->middleware('auth');

// detail
Route::get('membre/{numero}', 'ControleurMembres@afficher');


// route semaine 1
Route::get('membrescss', 'ControleurMembres@list');

//
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/identite','ControleurMembres@identite'); 
Route::get('/protege','ControleurMembres@acces_protege')->middleware('auth');
