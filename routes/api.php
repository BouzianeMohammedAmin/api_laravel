<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//al route must be authenticated 

Route::group(['middleware' => ['api', 'checkPassword', 'changeLang'], 'namespace' => 'Api'], function () {
    Route::post('get-main-categories', 'CategoriesController@index');
});