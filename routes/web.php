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

Route::prefix('admin')->middleware('login')->group(function(){

Route::get('create','AdminController@create');//添加页面
Route::post('store','AdminController@store');//执行添加
Route::get('index','AdminController@index');//首页
Route::get('destroy/{id}','AdminController@destroy');//删除
});
Route::view('/login','login');//登录页面
Route::post('/logindo','loginController@logindo');//验证登录