<?php
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\IndexController::class,'index']);

Route::post('/student-enroll',[App\Http\Controllers\StudentInqueries::class,'enroll']);
Route::post('/student-contact',[App\Http\Controllers\StudentInqueries::class,'contact']);
