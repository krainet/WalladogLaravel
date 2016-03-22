<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


/**
 * Protected Api routes
 */
/*Route::group(['middleware' => ['auth:api'],'prefix'=>'api/1.0'], function () {*/
Route::group(['middleware' => ['oauth'],'prefix'=>'api/1.0'], function () {

    Route::get('users/{id}', [
        'uses'  => 'UsersController@show',
        'as'    => 'users_show_path'
    ])->where('id','[0-9]+');

    Route::get('users', [
        'uses'  => 'UsersController@index',
        'as'    => 'users_index_path'
    ]);

});


/**
 * Public api routes
 */
Route::group(['prefix'=>'api/1.0'], function () {

    Route::post('login', [
        'uses'  => 'LoginController@create',
        'as'    => 'login_create_path'
    ]);

    Route::post('oauth/access_token', function() {
        return Response::json(Authorizer::issueAccessToken());
    });



});
