<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\UserController;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{id}', [PageController::class, 'showBlogPost'])->name('blog.post');
Route::get('/redirect', RedirectController::class)->name('redirect');

Route::get('/create-user', function () {
    return view('users.create-user');
})->name('user.create');

Route::post('/store-user', [UserController::class, 'store'])->name('user.store');
Route::get('/users', [UserController::class, 'getRecords'])->name('user.index');
Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/update-user/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/delete-user/{id}', [UserController::class, 'deleteRecord'])->name('user.delete');