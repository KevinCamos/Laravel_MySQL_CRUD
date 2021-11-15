<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('works', WorkController::class);


/* Antes feia açò */
// Route::post('/student', 'ApiController@create');
// Route::get('/students', 'ApiController@show');
// Route::get('/student/{id}', 'ApiController@showStudent');
// Route::put('/student/{id}', 'ApiController@updateStudent');
// Route::delete('/student/{id}', 'ApiController@deleteStudent');
