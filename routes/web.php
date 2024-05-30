<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\CoursesController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login.page');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/courses', [CoursesController::class, 'index'])->name('courses');
Route::get('/courses-data/{courseId}', [CoursesController::class, 'fetchCourseData'])->name('course.data');
Route::get('/lesson-data/{lessonId}', [CoursesController::class, 'fetchLessonData'])->name('lesson.data');
Route::get('/lesson-subjects/{lessonId}', [CoursesController::class, 'fetchLessonSubjects'])->name('lesson.subjects');
Route::get('/subject-video/{subjectId}', [CoursesController::class, 'fetchSubjectVideo'])->name('subject.video');
