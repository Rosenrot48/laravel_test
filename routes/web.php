<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function ()
{   $users = DB::table('users')->get();
    return view('users', compact('users'));
})->name('list')->middleware('verified');

Route::get('/users/{user}', function ($id)
{   $user = DB::table('users')->find($id);
    return view('user', compact('user'));
})->name('list')->middleware('verified');


//})->name('list')->middleware('verified');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
