<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[HomeController::class,'userpage']);
Route::get('userpage_side',[HomeController::class,'userpage_side']);
Route::get('courses',[HomeController::class,'courses']);
Route::get('files',[HomeController::class,'files']);
Route::get('friends',[HomeController::class,'friends']);
Route::get('plans',[HomeController::class,'plans']);
Route::get('profile',[HomeController::class,'profile']);
Route::get('projects',[HomeController::class,'projects']);
Route::get('settings',[HomeController::class,'settings']);



