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

// Route::get('/', function () {
//     return view('member');
// });
// Route::get('/',[MemberController::class,'teststaff']);
// Route::get('/e',[MemberController::class,'testNames'])->name('member');
// Route::view('list','member');
Route::get('list',[MemberController::class,'teststaff']);