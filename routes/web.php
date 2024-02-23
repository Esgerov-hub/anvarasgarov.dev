<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;


Route::get('/',[HomeController::class,'index'])->name('site.index');
Route::get('/about',[HomeController::class,'about'])->name('site.about');
Route::get('/project',[HomeController::class,'project'])->name('site.project');
Route::get('/project-detail',[HomeController::class,'projectDetail'])->name('site.projectDetail');
Route::get('/services',[HomeController::class,'services'])->name('site.services');
Route::get('/contact',[HomeController::class,'contact'])->name('site.contact');
