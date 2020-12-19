<?php

use Illuminate\Support\Facades\Route;

Route::resource('section', 'App\Http\Controllers\SectionController');
Route::resource('task', 'App\Http\Controllers\TaskController');
