<?php

use Illuminate\Support\Facades\Route;


Route::get('/shops', 'ShopController@index')->name('shop.list');

Route::get('/', function () {
    return redirect('/shops');
});

