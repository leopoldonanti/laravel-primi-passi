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

Route::get('/home', function() {
    $data = [
        "name" => "Leopoldo",
        "surname" => "Nanti",
    ];
    return view('home',$data);
});

Route::get('/bio', function () {

    $data = [
        "hobbies"=> ["Graphic-design", "Cinema", "Digital Art", "Type-design" ]
    ];

    return view('bio',$data);
    
});
Route::get('/clients', function () {
    return view('clients');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});

