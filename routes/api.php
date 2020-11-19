<?php

use Illuminate\Http\Middleware\CheckResponseForModifications;
use Illuminate\Support\Facades\Route;

// Scripts & Styles...
Route::get('/media/{dir}/{media}', 'MediaController@show')->middleware(CheckResponseForModifications::class);
