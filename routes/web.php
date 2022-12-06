<?php

use Illuminate\Support\Facades\Route;
use App\Models\Teacher;
use App\Models\classroom;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;

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



 Route::resource('/register',TeacherController::class);
 Route::get('/',[PageController::class,'index'])->name('index');
 Route::get('/classes',[PageController::class,'classes'])->name('classes');
 Route::get('/about',[PageController::class,'about'])->name('about');
 Route::get('/blog',[PageController::class,'blog'])->name('blog');
 Route::get('/contact',[PageController::class,'contact'])->name('contact');
 Route::get('/teacher',[PageController::class,'teacher'])->name('teacher');
 Route::get('/student',[PageController::class,'student'])->name('student');
 Route::resource('/studentadd',StudentController::class);







