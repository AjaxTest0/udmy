<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\CourseController::class, 'index'])->name('index');
Route::view('/view','student/view')->name('view');
Route::view('/checkout','stripe/checkout')->name('checkout');




Route::group(['prefix' => 'myCourses', 'as' => 'myCourses.'], function() {
	Route::get('/', [App\Http\Controllers\CourseController::class, 'index'])->name('index');
	Route::get('/{course}/view-course-details', [App\Http\Controllers\CourseController::class, 'show'])->name('show');
	Route::get('/create', [App\Http\Controllers\CourseController::class, 'create'])->name('create');
	Route::get('/destroy/{course}', [App\Http\Controllers\CourseController::class, 'destroy'])->name('destroy');
	Route::get('/edit/{course}', [App\Http\Controllers\CourseController::class, 'edit'])->name('edit');
	Route::get('/store', [App\Http\Controllers\CourseController::class, 'store'])->name('store');
	Route::get('/updateStatus/{course}/{status}', [App\Http\Controllers\CourseController::class, 'updateStatus'])->name('updateStatus');
	Route::get('/view', [App\Http\Controllers\CourseController::class, 'view'])->name('view');
});

Route::group(['prefix' => 'mySections', 'as' => 'mySections.'] , function() {
	Route::get('/', [App\Http\Controllers\CourseSectionController::class, 'index'])->name('index');
	Route::get('/{CourseSection}/add-section-details', [App\Http\Controllers\CourseSectionController::class, 'show'])->name('show');
	Route::get('/create', [App\Http\Controllers\CourseSectionController::class, 'create'])->name('create');
	Route::get('/destroy/{CourseSection}', [App\Http\Controllers\CourseSectionController::class, 'destroy'])->name('destroy');
	Route::post('/store', [App\Http\Controllers\CourseSectionController::class, 'store'])->name('store');
	Route::get('/updateStatus/{course}/{status}', [App\Http\Controllers\CourseController::class, 'updateStatus'])->name('updateStatus');
});
Route::group(['prefix' => 'myVideos', 'as' => 'myVideos.'] , function() {
	Route::get('/index', [App\Http\Controllers\CourseSectionVideoController::class, 'index'])->name('index');
	Route::get('/create', [App\Http\Controllers\CourseSectionVideoController::class, 'create'])->name('create');
	Route::get('/show', [App\Http\Controllers\CourseSectionVideoController::class, 'show'])->name('show');
	Route::get('/destroy/{CourseSectionVideo}', [App\Http\Controllers\CourseSectionVideoController::class, 'destroy'])->name('destroy');
	Route::post('/add-video-details/{CourseSectionVideo}', [App\Http\Controllers\CourseSectionVideoController::class, 'store'])->name('store');
	Route::get('/updateStatus/{course}/{status}', [App\Http\Controllers\CourseController::class, 'updateStatus'])->name('updateStatus');
});
Route::group(['prefix' => 'myStudents', 'as' => 'myStudents.'] , function() {
	Route::get('/index', [App\Http\Controllers\StudentController::class, 'index'])->name('index');
	Route::get('/create', [App\Http\Controllers\StudentController::class, 'create'])->name('create');
	Route::get('/destroy/', [App\Http\Controllers\StudentController::class, 'destroy'])->name('destroy');
	Route::get('/store', [App\Http\Controllers\StudentController::class, 'store'])->name('store');
	Route::get('/view', [App\Http\Controllers\StudentController::class, 'view'])->name('view');
	Route::get('/{course}/show', [App\Http\Controllers\StudentController::class, 'show'])->name('show');
});
Route::group(['prefix' => 'myUser', 'as' => 'myUsers.'] , function() {
	Route::get('/index', [App\Http\Controllers\UserController::class, 'index'])->name('index');
	Route::post('/create', [App\Http\Controllers\UserController::class, 'create'])->name('create');
	Route::get('/destroy{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('destroy');
	Route::get('/store', [App\Http\Controllers\UserController::class, 'store'])->name('store');
	Route::get('/view', [App\Http\Controllers\UserController::class, 'view'])->name('view');
	Route::get('/users', [App\Http\Controllers\UserController::class, 'users'])->name('users');
	
	
});
