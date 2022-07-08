<?php

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('test', function () {
    // return view('welcome');
    // return inertia('Welcome');
    return Inertia::render('Test', [
        'name' => 'khaled',
        'frameworks' => [
            'laravel', 'tailwindcss', 'nodejs', 'react'
        ],
    ]);
});

Route::get('/', function () {
    return Inertia::render('Home', [
        'users' => User::all()->map(fn($user) => [
            'name' => $user->name,
            'email' => $user->email
        ]),
    ]);
});

Route::get('users', function () {
    return Inertia::render('Users', [
        'time' => now()->toTimeString()
    ]);
});

Route::get('settings', function () {
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
    dd('logging the user out');
});