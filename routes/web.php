<?php
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\IndexController::class,'index']);
Route::get('/ar', [App\Http\Controllers\IndexController::class,'arabic'])->name('arabic');

Route::get('/enrolls_panel',[App\Http\Controllers\StudentInqueries::class,'dashboard']);
Route::get('/enrolls_ajax',[App\Http\Controllers\StudentInqueries::class,'enrolls_ajax'])->name('enrolls_ajax');
Route::post('/student-enroll',[App\Http\Controllers\StudentInqueries::class,'enroll']);
Route::post('/student-contact',[App\Http\Controllers\StudentInqueries::class,'contact']);

