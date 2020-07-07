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
Route::resource('offres','OffreController');

Route::resource('entreprise','EntrepriseController');
Route::resource('quizz','QuizzController');

Route::get('/', 'HomeController@index');


Route::get('/candidat',function(){
    return view('candidat',$entreprise );
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


