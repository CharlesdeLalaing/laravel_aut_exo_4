<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\RoleController;
use App\Models\Role;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/roles', function () {
    $roles = Role::all();
    return view('pages.role', compact('roles'));
})->middleware(['auth'])->name('roles');

Route::get('/users', function () {
    $users = User::all();
    return view('pages.user', compact('users'));
})->middleware(['auth'])->name('users');

Route::get('/create-role', function(){
    return view('partials.createRole');
});

Route::resource('role', RoleController::class);
Route::resource('user', RegisteredUserController::class);

require __DIR__.'/auth.php';
