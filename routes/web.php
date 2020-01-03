<?php

Route::get('/', function () {
    return view('main');
});

Route::get('/uppskriftir/sækja', 'RecipesController@show');
