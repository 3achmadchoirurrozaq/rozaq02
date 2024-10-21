<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Users', function () {
    foreach(User::all() as $user) {
        dump($User->name);
    }
});