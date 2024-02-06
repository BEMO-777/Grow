<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;


Auth::routes();




Route::get('/',[HomeController::class,'userpage']);
Route::group(['middleware' => 'auth'] , function() {
    Route::get('/userpage_side',[HomeController::class,'userpage_side']);
    Route::get('/courses',[HomeController::class,'courses']);
    Route::get('/files',[HomeController::class,'files']);
    Route::get('/friends',[HomeController::class,'friends']);
    Route::get('/plans',[HomeController::class,'plans']);
    Route::get('/profile',[HomeController::class,'profile']);
    Route::get('/projects',[HomeController::class,'projects']);
    Route::get('/settings',[HomeController::class,'settings']);
});
// login
Route::get('/loginpage',[HomeController::class,'loginpage']);
Route::get('/check',[HomeController::class,'check']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');




