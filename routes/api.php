<?php

use Illuminate\Http\Request;

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

// Route::post('register', 'API\RegisterController@register');

// Route::post('login', 'API\RegisterController@login');

   

// Route::middleware('auth:api')->group( function () {

//     Route::get('/todos', 'API\TodosController@index');
//     Route::post('/todos', 'API\TodosController@store');
//     Route::patch('/todos/{todo}', 'API\TodosController@update');
//     Route::patch('/todosCheckAll', 'API\TodosController@updateAll');
//     Route::delete('/todos/{todo}', 'API\TodosController@destroy');
//     Route::delete('/todosDeleteCompleted', 'API\TodosController@destroyCompleted');

// });

// Route::group(['middleware' => 'cors'], function () {
//     Route::post('/register', 'API\RegisterController@register');
//     Route::post('/login', 'API\RegisterController@login');

//     Route::middleware('auth:api')->group( function () {
//         Route::get('/todos', 'API\TodosController@index');
//         Route::post('/todos', 'API\TodosController@store');
//         Route::patch('/todos/{todo}', 'API\TodosController@update');
//         Route::patch('/todosCheckAll', 'API\TodosController@updateAll');
//         Route::delete('/todos/{todo}', 'API\TodosController@destroy');
//         Route::delete('/todosDeleteCompleted', 'API\TodosController@destroyCompleted');
//     });
    
// });

// Route::middleware('cors')->group(function(){

//     Route::get('/todos', 'API\TodosController@index');
//     Route::post('/todos', 'API\TodosController@store');
//     Route::patch('/todos/{todo}', 'API\TodosController@update');
//     Route::patch('/todosCheckAll', 'API\TodosController@updateAll');
//     Route::delete('/todos/{todo}', 'API\TodosController@destroy');
//     Route::delete('/todosDeleteCompleted', 'API\TodosController@destroyCompleted');

//     Route::post('/register', 'API\RegisterController@register');
//     Route::post('/login', 'API\RegisterController@login');
//  });


Route::middleware('auth:api')->group( function () {
    Route::get('/todos', 'API\TodosController@index');
    Route::post('/todos', 'API\TodosController@store');
    Route::patch('/todos/{todo}', 'API\TodosController@update');
    Route::patch('/todosCheckAll', 'API\TodosController@updateAll');
    Route::delete('/todos/{todo}', 'API\TodosController@destroy');
    Route::delete('/todosDeleteCompleted', 'API\TodosController@destroyCompleted');
});

Route::post('register', 'API\RegisterController@register');
Route::post('login', 'API\RegisterController@login');

 
