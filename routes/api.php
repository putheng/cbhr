<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'v2', 'namespace' => 'Api'], function(){

	Route::get('/listings', 'ListingController@index');

});