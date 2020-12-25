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

//Route::get('/', function () {
//
//
//});
//
//Route::get('index','front\UserController@getindex');
////
//Route::get('/test1', function () {
//    return 'welcome';
//});
//
//Route::get('/landing', function () {
//    return view('landing');
//});
//
//Route::get('/about', function () {
//    return view('about');
//});
//
///*//route name
//Route::namespace('Front')->group(function (){
//    //all route only acess controller or methods in folder name Front
//    Route::get('users','UserController@showUserName');
//});*/
//
///*Route::prefix('users') ->group(function (){
//    Route::get('show','UserController@showUserName');
//    Route::delete('delete','UserController@showUserName');
//    Route::get('edit','UserController@showUserName');
//    Route::put('update','UserController@showUserName');
//});*/
//
////Route::group(['prefix' => 'users', 'middleware' => 'auth'],function (){
////    //set of routes
////
////    Route::get('/',function (){
////        return 'work';
////    });
////
////    Route::get('show','UserController@showUserName');
////    Route::delete('delete','UserController@showUserName');
////    Route::get('edit','UserController@showUserName');
////    Route::put('update','UserController@showUserName');
////});
////
////Route::get('check',function (){
////       return 'middleware';
////}) -> middleware('auth');
////
////Route::get('Second','Admin\SecondController@showstring');
//
//Route::resource('news','NewsController');
//
////Route::get('news','NewController@index');
////Route::post('news','NewController@store');
////Route::get('news/create','NewController@create');
////Route::get('news/{id}/edit','NewController@edit');
////Route::post('update/{id}','NewController@update');
////Route::delete('news/{id}','NewController@delete');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',function(){
    return 'Home';
});
