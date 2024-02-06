<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('content');
});

/*
Route::get('/', [::class, 'index'])->name('index');*/
