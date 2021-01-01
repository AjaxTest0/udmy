<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/view','student/view')->name('view');




Route::group(['prefix' => 'myCourses', 'as' => 'myCourses.'], function() {
	Route::get('/', [App\Http\Controllers\CourseController::class, 'index'])->name('index');
	Route::get('/{course}/view-course-details', [App\Http\Controllers\CourseController::class, 'show'])->name('show');
	Route::get('/create', [App\Http\Controllers\CourseController::class, 'create'])->name('create');
	Route::get('/destroy', [App\Http\Controllers\CourseController::class, 'destroy'])->name('destroy');
	Route::get('/store', [App\Http\Controllers\CourseController::class, 'store'])->name('store');
});
Route::group(['prefix' => 'mySections', 'as' => 'mySections.'] , function() {
	Route::get('/index', [App\Http\Controllers\CourseSectionController::class, 'index'])->name('index');
	Route::get('/{CourseSection}/add-section-details', [App\Http\Controllers\CourseSectionController::class, 'show'])->name('show');
	Route::get('/create', [App\Http\Controllers\CourseSectionController::class, 'create'])->name('create');
	Route::get('/destroy', [App\Http\Controllers\CourseSectionController::class, 'destroy'])->name('destroy');
	Route::get('/store', [App\Http\Controllers\CourseSectionController::class, 'store'])->name('store');
});
Route::group(['prefix' => 'myVideos', 'as' => 'myVideos.'] , function() {
	Route::get('/index', [App\Http\Controllers\CourseSectionVideoController::class, 'index'])->name('index');
	Route::get('/create', [App\Http\Controllers\CourseSectionVideoController::class, 'create'])->name('create');
	Route::get('/show', [App\Http\Controllers\CourseSectionVideoController::class, 'show'])->name('show');
	Route::get('/destroy', [App\Http\Controllers\CourseSectionVideoController::class, 'destroy'])->name('destroy');
	Route::post('/store', [App\Http\Controllers\CourseSectionVideoController::class, 'store'])->name('store');
});
Route::group(['prefix' => 'myStudents', 'as' => 'myStudents.'] , function() {
	Route::get('/index', [App\Http\Controllers\StudentController::class, 'index'])->name('index');
	Route::get('/create', [App\Http\Controllers\StudentController::class, 'create'])->name('create');
	Route::get('/destroy', [App\Http\Controllers\StudentController::class, 'destroy'])->name('destroy');
	Route::get('/store', [App\Http\Controllers\StudentController::class, 'store'])->name('store');
});
