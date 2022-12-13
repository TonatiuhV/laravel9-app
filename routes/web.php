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
//Mediante una una funcion
// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/','welcome');
Route::view('/contacto','contact')->name('contact');
Route::view('/blog','blog')->name('blog');
Route::view('/about','about')->name('about');


//Mutiples methos of route
// Route::match(['put', 'patch'], '/', function (){
//    //Metodos en espefico
// });
// Route::any('/', function(){
//     //todos los methos
// });
