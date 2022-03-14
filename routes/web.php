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
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('register', [AuthController::class, 'showFormRegister'])->name('frontend.auth.register');
Route::post('register', [AuthController::class, 'register'])->name('frontend.auth.login');
Route::get('/user', [UserController::class, 'index'])->name('backend.user.index');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('showFormLogin');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::middleware('checkAuth')->group(function (){
    Route::prefix('blogs')->group(function (){
        Route::get('/',[BlogController::class, 'index'])->name('backend.blog.index');
        Route::get('/create',[BlogController::class, 'create'])->name('backend.blog.create');
        Route::post('/create',[BlogController::class, 'store'])->name('backend.blog.store');
    });
});
