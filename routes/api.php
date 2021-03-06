<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register','UserController@register');
Route::post('login', 'UserController@login');
// Route::resource('score','ScoreController');
Route::get('lala','UserController@lala');

Route::group(['middleware' => 'auth:api'], function() {
    // Route::post('register','UserController@register');
    // Route::post('login', 'UserController@login');
    // Route::get('lala','UserController@lala');
    Route::resource('subject','SubjectController');
    Route::resource('class','SClassController');
    Route::resource('student','StudentController');
    Route::resource('score','ScoreController');
    Route::resource('session','SessionController');
});


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
