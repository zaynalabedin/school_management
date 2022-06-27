<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard')->middleware('adminAuth');


Route::get('/teachers/dashboard', [App\Http\Controllers\TeacherController::class, 'dashboard'])->name('teachers.dashboard')->middleware('teacherAuth');

// Route::get('/students/dashboard', [App\Http\Controllers\StudentController::class, 'dashboard'])->name('students.dashboard');





//Teachers Route

Route::get('/teachers', [App\Http\Controllers\TeacherController::class, 'index'])->name('teachers.index');
Route::get('/teachers/create', [App\Http\Controllers\TeacherController::class, 'create'])->name('teachers.create');
Route::post('/teachers', [App\Http\Controllers\TeacherController::class, 'store'])->name('teachers.store');
Route::get('/teachers/edit/{id}', [App\Http\Controllers\TeacherController::class, 'edit'])->name('teachers.edit');
Route::get('/teachers/show/{id}', [App\Http\Controllers\TeacherController::class, 'show'])->name('teachers.show');
Route::put('/teachers/update/{id}', [App\Http\Controllers\TeacherController::class, 'update'])->name('teachers.update');
Route::delete('/teachers/destroy/{id}', [App\Http\Controllers\TeacherController::class, 'destroy'])->name('teachers.destroy');

//Students Route

Route::get('/students', [App\Http\Controllers\StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [App\Http\Controllers\StudentController::class, 'create'])->name('students.create');
Route::post('/students', [App\Http\Controllers\StudentController::class, 'store'])->name('students.store');
Route::get('/students/edit/{id}', [App\Http\Controllers\StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{update}', [App\Http\Controllers\StudentController::class, 'update'])->name('students.update');
Route::get('/students/show/{id}', [App\Http\Controllers\StudentController::class, 'show'])->name('students.show');
Route::delete('/students/{destroy}', [App\Http\Controllers\StudentController::class, 'destroy'])->name('students.destroy');

//Sections Route

Route::get('/courses', [App\Http\Controllers\CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/create', [App\Http\Controllers\CourseController::class, 'create'])->name('courses.create');
Route::post('/courses', [App\Http\Controllers\CourseController::class, 'store'])->name('courses.store');
Route::get('/courses/edit/{id}', [App\Http\Controllers\CourseController::class, 'edit'])->name('courses.edit');
Route::put('/courses/{update}', [App\Http\Controllers\CourseController::class, 'update'])->name('courses.update');
Route::get('/courses/show/{id}', [App\Http\Controllers\CourseController::class, 'show'])->name('courses.show');
Route::delete('/courses/{destroy}', [App\Http\Controllers\CourseController::class, 'destroy'])->name('courses.destroy');

//Subjects Route

Route::get('/subjects', [App\Http\Controllers\SubjectController::class, 'index'])->name('subjects.index');
Route::get('/subjects/create', [App\Http\Controllers\SubjectController::class, 'create'])->name('subjects.create');
Route::post('/subjects', [App\Http\Controllers\SubjectController::class, 'store'])->name('subjects.store');
Route::get('/subjects/edit/{id}', [App\Http\Controllers\SubjectController::class, 'edit'])->name('subjects.edit');
Route::put('/subjects/{update}', [App\Http\Controllers\SubjectController::class, 'update'])->name('subjects.update');

Route::delete('/subjects/{destroy}', [App\Http\Controllers\SubjectController::class, 'destroy'])->name('subjects.destroy');

//Sections Route

Route::get('/sections', [App\Http\Controllers\SectionController::class, 'index'])->name('sections.index');
Route::get('/sections/create', [App\Http\Controllers\SectionController::class, 'create'])->name('sections.create');
Route::post('/sections', [App\Http\Controllers\SectionController::class, 'store'])->name('sections.store');
Route::get('/sections/edit/{id}', [App\Http\Controllers\SectionController::class, 'edit'])->name('sections.edit');
Route::put('/sections/{update}', [App\Http\Controllers\SectionController::class, 'update'])->name('sections.update');

Route::delete('/sections/{destroy}', [App\Http\Controllers\SectionController::class, 'destroy'])->name('sections.destroy');

//Exams Route

Route::get('/exams', [App\Http\Controllers\ExamController::class, 'index'])->name('exams.index');
Route::get('/exams/create', [App\Http\Controllers\ExamController::class, 'create'])->name('exams.create');
Route::post('/exams', [App\Http\Controllers\ExamController::class, 'store'])->name('exams.store');
Route::get('/exams/edit/{id}', [App\Http\Controllers\ExamController::class, 'edit'])->name('exams.edit');
Route::put('/exams/{update}', [App\Http\Controllers\ExamController::class, 'update'])->name('exams.update');

Route::delete('/exams/{destroy}', [App\Http\Controllers\ExamController::class, 'destroy'])->name('exams.destroy');

//Questions Route

Route::get('/questions', [App\Http\Controllers\QuestionController::class, 'index'])->name('questions.index');
Route::get('/questions/create', [App\Http\Controllers\QuestionController::class, 'create'])->name('questions.create');
Route::post('/questions', [App\Http\Controllers\QuestionController::class, 'store'])->name('questions.store');
Route::get('/questions/edit/{id}', [App\Http\Controllers\QuestionController::class, 'edit'])->name('questions.edit');
Route::put('/questions/{update}', [App\Http\Controllers\QuestionController::class, 'update'])->name('questions.update');

Route::delete('/questions/{destroy}', [App\Http\Controllers\QuestionController::class, 'destroy'])->name('questions.destroy');






// Route::group(['prefix'=>'admin'],function(){
//     Route::view('/login', 'admin.login')->name('admin.login');
//     Route::post('/login', [App\Http\Controllers\AdminController::class, 'authenticate'])->name('admin.auth');
//     Route::post('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');

//     Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('admin.dashboard');
// });

// Route::group(['prefix'=>'teacher'],function(){
//     Route::get('/teachers/dashboard', [App\Http\Controllers\TeacherController::class, 'dashboard'])->name('teacher.dashboard');
// });
