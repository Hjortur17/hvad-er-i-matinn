<?php

Route::get('/', function () {
    return view('welcome');
});

Route::post('/uppskriftir/sækja', 'RecipesController@index');
