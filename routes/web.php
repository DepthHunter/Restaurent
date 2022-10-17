<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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


Route::get('/',[\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/users',[\App\Http\Controllers\AdminController::class, 'user']);

Route::get('/deletemenu/{id}',[\App\Http\Controllers\AdminController::class, 'deletemenu']);

Route::get('/updateview/{id}',[\App\Http\Controllers\AdminController::class, 'updateview']);

Route::post('/update/{id}',[\App\Http\Controllers\AdminController::class, 'update']);

Route::get('/foodmenu',[\App\Http\Controllers\AdminController::class, 'foodmenu']);

Route::post('/uploadfood',[\App\Http\Controllers\AdminController::class, 'upload']);

Route::get('/deleteuser/{id}',[\App\Http\Controllers\AdminController::class, 'deleteuser']);

Route::get('/redirects',[\App\Http\Controllers\HomeController::class, 'redirects']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
