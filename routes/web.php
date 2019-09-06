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

Route::get('/','Main@index');
Route::get('/devam/{id}','Main@devam');
Route::post('/insertComment','Main@insertComment');
Route::post('/send','main@sendMessage');
Route::get('/contact','Main@contact');
Route::get('/category/{id}','Main@category');

Route::group(['prefix'=>'admin'], function(){

    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

    //Üyeler
    Route::get('/user', 'Admin\Userr@user');
    Route::get('/update/{id}', 'Admin\Userr@update');
    Route::post('/update', 'Admin\Userr@user');
    Route::get('/update', 'Admin\Userr@user');
    Route::get('/delete/{id}','Admin\Userr@delete');

    //Makaleler
    Route::get('/article','Admin\Articlee@index');
    Route::get('/newarticle','Admin\Articlee@insertArticle');
    Route::post('/insertArticle','Admin\Articlee@index');
    Route::get('/updateArticle/{id}','Admin\Articlee@update');
    Route::post('/updateArticle','Admin\Articlee@index');
    Route::get('/deleteArticle/{id}','Admin\Articlee@delete');

    //Kategoriler
    Route::get('/categories','admin\Categories@index');
    Route::get('/categories/insert','admin\Categories@insert');
    Route::post('/categories','admin\Categories@index');
    Route::get('/categories/update/{id}','admin\Categories@update');
    Route::post('/categories/{id}','admin\Categories@index');
    Route::get('categories/delete/{id}','Admin\Categories@delete');


    //Yorumlar
    Route::get('/comments','admin\Comments@index');
    Route::get('/deleteComment/{id}','admin\Comments@deleteComment');

    //Mesajlar
    Route::get('/messages','admin\Message@index');
    Route::get('/deleteMessages/{id}','admin\Message@deleteMessages');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/logout','Auth\LoginController@userLogout')->name('user.logout');


//Üye Kayıt Sayfası
Route::get('/register','Main@insertUsers');
Route::post('/register','Main@insertUsers');
