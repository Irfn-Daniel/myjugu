<?php

use App\Http\Controllers\MemberInfo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Admin
Route::resource('admins', AdminController::class); 

//Users
Route::resource('users', MemberController::class);

//Show login form
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

//Login
Route::post('login', [AuthController::class, 'login']);

Route::get('regions', [AdminController::class, 'getRegions'])->name('get-regions');











