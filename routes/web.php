<?php

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\NotificationController;

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


Route::get('login', [LoginController::class, 'create'])->name('login');


Route::middleware('auth')->group(function () {

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
            // 'users' => User::all()->map(fn($user) => [
            //     'name' => $user->name,
            //     'email' => $user->email
            // ]),
        ]);
    });




    Route::get('users', function () {

        $users = User::query()
            ->when(Request::input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->paginate(3, ['id', 'name', 'email']);
        // ->withQueryString();


        return Inertia::render('Users/Index', [
            'time' => now()->toTimeString(),
            'users' => $users,
            'filters' => Request::only(['search'])
        ]);
    });




    // Create User Manual way
    Route::get('users/create', function () {
        return Inertia::render('Users/Create');
    });
    Route::post('users', function () {
        // validate
        $attributes = Request::validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);
        //create
        User::create($attributes);
        //redirect
        return redirect('/users');
    });


    // Create User Using Form Helper
    Route::get('users/createByFormHelper', function () {
        return Inertia::render('Users/CreateByFormHelper');
    });
    // Route::post('users', function () {
    // });







    Route::get('settings', function () {
        return Inertia::render('Settings');
    });

    Route::post('/logout', function () {
        dd('logging the user out');
    });
});
