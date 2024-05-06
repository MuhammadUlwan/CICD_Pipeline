<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function() {
    return view('admin.user');
})->name('user');

Route::get('/dashboard', function() {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/kategori', function() {
    return view('admin.kategori');
})->name('kategori');

Route::get('/post', function() {
    return view('admin.post');
})->name('post');