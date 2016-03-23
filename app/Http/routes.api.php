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

Route::group(['middleware' => ['oauth'],'prefix'=>'api/1.0'], function () {

    Route::put('users/{id}', [
        'uses'  => 'UsersController@update',
        'as'    => 'users_update_path'
    ])->where('id','[0-9]+');

    Route::delete('users/{id}', [
        'uses'  => 'UsersController@destroy',
        'as'    => 'users_delete_path'
    ])->where('id','[0-9]+');

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

    /**
     * Oauth2 and User create routes
     */
    Route::post('oauth/access_token', function() {
        return Response::json(Authorizer::issueAccessToken());
    });

    Route::post('users', [
        'uses'  => 'UsersController@create',
        'as'    => 'users_create_path'
    ]);

    /**
     * Pets routes
     */
    Route::get('pets/{id}', [
        'uses'  => 'PetsController@show',
        'as'    => 'pets_show_path'
    ])->where('id','[0-9]+');

    Route::get('pets', [
        'uses'  => 'PetsController@index',
        'as'    => 'pets_index_path'
    ]);

    /**
     * Partners routes
     */
    Route::get('partners/{id}', [
        'uses'  => 'PartnersController@show',
        'as'    => 'partners_show_path'
    ])->where('id','[0-9]+');

    Route::get('partners', [
        'uses'  => 'PartnersController@index',
        'as'    => 'partners_index_path'
    ]);

    /**
     * Publications routes
     */
    Route::get('publications', [
        'uses'  => 'PublicationsController@index',
        'as'    => 'publications_index_path'
    ]);

    Route::get('publications/{id}', [
        'uses'  => 'PublicationsController@show',
        'as'    => 'publications_show_path'
    ])->where('id','[0-9]+');


    /**
     * Sites Routes
     */
    Route::get('sites', [
        'uses'  => 'SitesController@index',
        'as'    => 'sites_index_path'
    ]);

    Route::get('sites/{id}', [
        'uses'  => 'SitesController@show',
        'as'    => 'sites_show_path'
    ])->where('id','[0-9]+');

});
