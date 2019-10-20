<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('search/{word}', 'APIController@search');
Route::get('getAll', 'APIController@getAll');