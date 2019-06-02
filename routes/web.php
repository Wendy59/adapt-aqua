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

Route::get('/','SiteController@show');

Route::group(['prefix' => 'mail', 'namespace' => 'Mail'], function() {
    Route::post('/send', 'MailController@sendEmailContact')->name('contact.send');
});

/**
 * Routes concernant l'authentification
 */
Auth::routes();
Route::get('/login', 'Auth\LoginController@index')->name('login');


/**
 * ADMINISTRATION
 */
Route::get('/administration', 'HomeController@index')->name('admin.home');
Route::group(['prefix' => 'administration', 'namespace' => 'Admin'], function() {
    /**
     * HOME
     */
    Route::group(['prefix' => 'home'], function() {
        Route::get('/', 'HomeController@index')->name('admin.home');
        Route::post('/update', 'HomeController@update')->name('admin.home.update');
    });
    /**
     * CONTACT
     */
    Route::group(['prefix' => 'contact'], function() {
        Route::get('/', 'ContactController@index')->name('admin.contact');
        Route::post('/update', 'ContactController@update')->name('admin.contact.update');
    });
});
