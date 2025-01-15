<?php

use App\Http\Controllers\MemberController;
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

Route::get('/bg', function () {
    return view('bg');
});
// Route::get('/',[MemberController::class,'teststaff']);
// Route::get('/e',[MemberController::class,'testNames'])->name('member');
// Route::view('list','member');
// Route::get('list',[MemberController::class,'teststaff']);
Route::get('/',[MemberController::class,'getmember']);
Route::get('/show',[MemberController::class,'ShowAllmember']);
