<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Middleware\Admin;
use App\Http\Controllers\Admin\SiteWordsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\StaticPagesController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\SettingsController;

Route::get('/',[HomeController::class,'index'])->name('site.index');
Route::get('/about',[HomeController::class,'about'])->name('site.about');
Route::get('/project',[HomeController::class,'project'])->name('site.project');
Route::get('/project-detail',[HomeController::class,'projectDetail'])->name('site.projectDetail');
Route::get('/services',[HomeController::class,'services'])->name('site.services');
Route::get('/contact',[HomeController::class,'contact'])->name('site.contact');




Route::get('/login',[AuthController::class,'login'])->name('admin.login');
Route::post('/loginAccept',[AuthController::class,'loginAccept'])->name('admin.loginAccept');

Route::middleware([Admin::class])->prefix('/admin')->name('admin.')->group(function () {
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');
    Route::get('/site-words/{code}', [SiteWordsController::class,'edit'])->name('site-words.edit');
    Route::put('/site-words/update/{code}', [SiteWordsController::class,'update'])->name('site-words.update');

    Route::get('/social/{code}', [SettingsController::class,'edit'])->name('social.edit');
    Route::put('/social/update/{code}', [SettingsController::class,'update'])->name('social.update');

    Route::get('/home', [\App\Http\Controllers\Admin\HomeController::class,'home'])->name('home');

    Route::resource('category',CategoryController::class);
    Route::post('category/status/{id}', [CategoryController::class,'status'])->name('category.status');

    Route::resource('static-pages',StaticPagesController::class);
    Route::resource('news',NewsController::class);
    Route::post('news/status/{id}', [NewsController::class,'status'])->name('news.status');

    Route::resource('users',UsersController::class);
});
