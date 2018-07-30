<?php


Route::get('/about', function () {
    return view('page.about');
});

Route::get('/shop', function () {
    return view('page.shop');
});

Route::get('/contatti', function () {
    return view('page.contatti');
});