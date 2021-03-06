<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', function() {
    return View::make('hello');
}]);

Route::get('login', [
    'as'   => 'login',
    'uses' => 'SessionsController@create'
]);

Route::get('logout', [
    'as'   => 'logout',
    'uses' => 'SessionsController@destroy'
]);

Route::resource('sessions', 'SessionsController', [
    'only' => ['create', 'store', 'destroy']
]);

// ########## ADMIN AREA ##########

Route::group(['prefix' => 'admin', 'before' => 'auth'], function () {

    Route::get('/', ['as' => 'dashboard', function () {
        return View::make('admin.dashboard');
    }]);

});
