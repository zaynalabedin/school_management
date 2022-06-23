<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
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
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







//Teachers Route

Route::get('/teachers', [App\Http\Controllers\TeacherController::class, 'index'])->name('teachers.index');
Route::get('/teachers/create',[App\Http\Controllers\TeacherController::class ,'create'])->name('teachers.create');
Route::post('/teachers',[App\Http\Controllers\TeacherController::class ,'store'])->name('teachers.store');
Route::get('/teachers/edit/{id}',[App\Http\Controllers\TeacherController::class ,'edit'])->name('teachers.edit');
Route::get('/teachers/show/{id}',[App\Http\Controllers\TeacherController::class ,'show'])->name('teachers.show');
Route::put('/teachers/update/{id}',[App\Http\Controllers\TeacherController::class ,'update'])->name('teachers.update');
Route::delete('/teachers/destroy/{id}',[App\Http\Controllers\TeacherController::class ,'destroy'])->name('teachers.destroy');



//Students Route


Route::get('/students',[App\Http\Controllers\StudentController::class ,'index'])->name('students.index');
Route::get('/students.create',[App\Http\Controllers\StudentController::class ,'create'])->name('students.create');
Route::post('/students',[App\Http\Controllers\StudentController::class ,'store'])->name('students.store');
Route::get('/students/edit/{id}',[App\Http\Controllers\StudentController::class ,'edit'])->name('students.edit');
Route::put('/students/{update}',[App\Http\Controllers\StudentController::class ,'update'])->name('students.update');
Route::get('/students/show/{id}',[App\Http\Controllers\StudentController::class ,'show'])->name('students.show');
Route::delete('/students/{destroy}',[App\Http\Controllers\StudentController::class ,'destroy'])->name('students.destroy');



//Sections Route

Route::get('/courses',[App\Http\Controllers\CourseController::class ,'index'])->name('courses.index');
Route::get('/courses.create',[App\Http\Controllers\CourseController::class ,'create'])->name('courses.create');
Route::post('/courses',[App\Http\Controllers\CourseController::class ,'store'])->name('courses.store');
Route::get('/courses/edit/{id}',[App\Http\Controllers\CourseController::class ,'edit'])->name('courses.edit');
Route::put('/courses/{update}',[App\Http\Controllers\CourseController::class ,'update'])->name('courses.update');
Route::get('/courses/show/{id}',[App\Http\Controllers\CourseController::class ,'show'])->name('courses.show');
Route::delete('/courses/{destroy}',[App\Http\Controllers\CourseController::class ,'destroy'])->name('courses.destroy');


//Subjects Route

Route::get('/subjects',[App\Http\Controllers\SubjectController::class ,'index'])->name('subjects.index');
Route::get('/subjects.create',[App\Http\Controllers\SubjectController::class ,'create'])->name('subjects.create');
Route::post('/subjects',[App\Http\Controllers\SubjectController::class ,'store'])->name('subjects.store');
Route::get('/subjects/edit/{id}',[App\Http\Controllers\SubjectController::class ,'edit'])->name('subjects.edit');
Route::put('/subjects/{update}',[App\Http\Controllers\SubjectController::class ,'update'])->name('subjects.update');

Route::delete('/subjects/{destroy}',[App\Http\Controllers\SubjectController::class ,'destroy'])->name('subjects.destroy');
