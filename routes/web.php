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

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.auth.login');
});
Route::get('register', [AuthController::class, 'showFormRegister'])->name('frontend.auth.register');
Route::get('/user', [UserController::class, 'index'])->name('backend.user.index');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('showFormLogin');
Route::middleware('checkAuth')->group(function (){

});
