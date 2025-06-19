<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/data-opd', function () {
    return view('pages.data-opd');
});

Route::get('/tentang', function () {
    return view('pages.tentang');
});

Route::get('/syarat', function () {
    return view('pages.syarat');
});

Route::get('/help', function () {
    return view('pages.help');
});

Route::get('/login', function () {
    return view('pages.login');
});
