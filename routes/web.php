<?php

use App\Models\Exercise;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sync', function () {
    return Exercise::with(['category', 'muscles', 'equipment'])->where('id', 570)->get();
});
