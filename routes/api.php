<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(
    [
        'namespace'=>'App\Http\Controllers',
        'prefix'=>'v1',
    ],
    function (){
        Route::group(
            [
                'prefix'=>'buildings',
            ],
            function(){
                
                    Route::get('/', 'BuildingsController@index'); 
                    Route::post('/', 'BuildingsController@create');
                    Route::put('/', 'BuildingsController@update');
                    Route::delete('/{id}', 'BuildingsController@delete');
                                
            }
        );
    }
);
