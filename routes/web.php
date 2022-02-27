<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Blogcontroller;

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

Route::get('/', [StudentController::class, 'index'])->name('home');
Route::get('/add-blog', [Blogcontroller::class, 'index'])->name('blog');
Route::get('/manage-student', [StudentController::class, 'manage'])->name('manage-student');

Route::post('/new-student', [ StudentController::class, 'create' ])->name('new-student');
Route::post('/new-blog', [ Blogcontroller::class, 'create' ])->name('new-blog');


