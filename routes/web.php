<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index'); // Memberikan nama 'home' pada rute '/'

Route::get('/history', function () {
    return view('history');
})->name('history'); // Memberikan nama 'history' pada rute '/history'

Route::get('/home', function () {
    return view('home');
})->name('home'); // Memberikan nama 'home' pada rute '/home' (nama ini telah diberikan pada rute pertama)

Route::get('/settings', function () {
    return view('settings');
})->name('settings'); // Memberikan nama 'settings' pada rute '/settings'

Route::get('/signin', function () {
    return view('signin');
})->name('signin'); // Memberikan nama 'signin' pada rute '/signin'
