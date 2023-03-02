<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';

Route::view('crud','main');

Route::get('crud',[usercontroller::class,'show'])->name('index');
Route::post('crud',[usercontroller::class,'AddData']);

Route::get('delete/{id}',[usercontroller::class,'delete']);
Route::post('delete/{id}',[usercontroller::class,'delete']);

// Route::get('update/{id}',[usercontroller::class,'showdata']);

Route::get('getstudent', [usercontroller::class,'getstudent']);
Route::post('update/{id}',[usercontroller::class,'updateUser']);

Route::get('view/{id}',[usercontroller::class,'viewrecord']);
Route::get('search/', ['usercontroller'])->name('search');
