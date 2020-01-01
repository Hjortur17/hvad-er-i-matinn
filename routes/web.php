<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/uppskriftir/sækja', 'RecipesController@show');
