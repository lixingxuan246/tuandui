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
Route::get('/','IndexController@index');

<<<<<<< HEAD
Route::prefix('good')->group(function(){
    Route::post('/','GoodController@index');
    Route::post('/insert','GoodController@insert');
    Route::get('/list','GoodController@list');
    Route::get('/destroy/{id}','GoodController@destroy');
    Route::get('/edit/{id}','GoodController@edit');
    Route::post('/update/{id}','GoodController@update');


=======
>>>>>>> eaf7fadbfec4bf69b2a3d7341d6e1276c68a4930

Route::prefix('good')->group(function(){
  Route::get('/index','GoodController@index');
  Route::get('/create','GoodController@create');
  Route::post('/store','GoodController@store');
  Route::get('/destroy/{id}','GoodController@destroy');
});

<<<<<<< HEAD

=======
>>>>>>> eaf7fadbfec4bf69b2a3d7341d6e1276c68a4930
Route::prefix('admin')->middleware('login')->group(function(){

  Route::get('create','AdminController@create');//添加页面
  Route::post('store','AdminController@store');//执行添加
  Route::get('index','AdminController@index');//首页
  Route::get('destroy/{id}','AdminController@destroy');//删除
});
Route::view('/login','login');//登录页面
Route::post('/logindo','loginController@logindo');//验证登录

//分类
Route::prefix('type')->group(function(){
   
  Route::get('/create','TypeController@create');
  Route::post('/store','TypeController@store');
  Route::get('/','TypeController@index');
  Route::get('/edit/{id}','TypeController@edit');
  Route::post('/update/{id}','TypeController@update');
  Route::get('/destroy/{id}','TypeController@destroy');
});
<<<<<<< HEAD

=======
 
//品牌
Route::get('/brand/create','BrandController@create');
Route::post('/brand/store','BrandController@store');
<<<<<<< HEAD
Route::get('brand','BrandController@index');
Route::get('/brand/edit/{id}','BrandController@edit');
Route::post('/brand/update/{id}','BrandController@update');
Route::get('/brand/destroy/{id}','BrandController@destroy');
>>>>>>> 2b833fba74642c37fbef7629ca393c67aac6590e
=======
Route::get('/brand/index','BrandController@index');
Route::get('/brand/edit/{id}','BrandController@edit');
Route::post('/brand/update/{id}','BrandController@update');
Route::get('/brand/destroy/{id}','BrandController@destroy');
>>>>>>> eaf7fadbfec4bf69b2a3d7341d6e1276c68a4930
