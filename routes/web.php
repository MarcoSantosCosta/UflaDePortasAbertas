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



Route::group(['prefix' => 'API'], function () {

    Route::group(['prefix' => 'courses'], function () {
        Route::get('', ['uses' => 'CoursesController@getAll']);
        Route::get('{id}/activities', ['uses' => 'CoursesController@getActivities']);
        Route::get('{id}', ['uses' => 'CoursesController@get']);
        Route::post('', ['uses' => 'CoursesController@add']);
        Route::put('{id}', ['uses' => 'CoursesController@set']);
        Route::delete('{id}', ['uses' => 'CoursesController@remove']);
        // /API/courses
    });


    Route::group(['prefix' => 'infos'], function () {
        Route::get('', ['uses' => 'InfoController@getAll']);
        Route::get('{id}', ['uses' => 'InfoController@get']);
        Route::get('{id}/activities', ['uses' => 'InfoController@getActivities']);
        Route::post('', ['uses' => 'InfoController@add']);
        Route::put('{id}', ['uses' => 'InfoController@set']);
        Route::delete('{id}', ['uses' => 'InfoController@remove']);
    });

    Route::group(['prefix' => 'activities'], function () {
        Route::get('', ['uses' => 'ActivitiesController@getAll']);
        Route::get('{id}', ['uses' => 'ActivitiesController@get']);
        Route::post('', ['uses' => 'ActivitiesController@add']);
        Route::put('{id}', ['uses' => 'ActivitiesController@set']);
        Route::delete('{id}', ['uses' => 'ActivitiesController@remove']);
    });

//    Route::group(['prefix' => 'cards'], function () {
//        Route::get('', ['uses' => 'TODO']);
//        Route::get('{id}', ['uses' => 'TODO']);
//        Route::post('', ['uses' => 'TODO']);
//        Route::put('{id}', ['uses' => 'TODO']);
//        Route::delete('{id}', ['uses' => 'TODO']);
//    });
////
//    Route::group(['prefix' => 'util'], function () {
//        Route::get('', ['uses' => 'TODO']);
//        Route::get('{id}', ['uses' => 'TODO']);
//        Route::post('', ['uses' => 'TODO']);
//        Route::put('{id}', ['uses' => 'TODO']);
//        Route::delete('{id}', ['uses' => 'TODO']);
//    });
//
//    Route::group(['prefix' => 'user'], function () {
//        Route::get('', ['uses' => 'TODO']);
//        Route::get('{id}', ['uses' => 'TODO']);
//        Route::post('', ['uses' => 'TODO']);
//        Route::put('{id}', ['uses' => 'TODO']);
//        Route::delete('{id}', ['uses' => 'TODO']);
//    });
//
//    Route::group(['prefix' => 'auth'], function () {
//        Route::get('', ['uses' => 'TODO']);
//        Route::post('', ['uses' => 'TODO']);
//    });
});
