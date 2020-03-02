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

// Route::get('/', function () {
//     $name="1908李";
//     return view('welcome',['name'=>$name]);
// });


// Route::get('/add', function () {

//     return view('add.add');
// });


Route::prefix('good')->group(function(){
    Route::get('/','GoodController@index');
});


