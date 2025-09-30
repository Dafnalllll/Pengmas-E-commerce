<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//User Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('pages.user.blog');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/contact', function () {
    return view('pages.user.contact');
})->name('contact');


// Admin Routes
Route::get('/dashboardadmin', function () {
    return view('pages.admin.dashboardadmin');
})->name('admin.dashboard');

Route::get('/productmanage', function () {
    return view('pages.admin.productadmin');
})->name('admin.product');

Route::get('/admin/add/addproduct', function () {
    return view('pages.admin.add.addproduct');
})->name('admin.add.product');

Route::get('/sop', function () {
    return view('pages.admin.sop');
})->name('admin.sop');

Route::get('/admin/add/addsop', function () {
    return view('pages.admin.add.addsop');
})->name('admin.add.sop');

Route::get('/blogadmin', function () {
    return view('pages.admin.blogadmin');
})->name('admin.blog');

Route::get('/admin/add/addblog', function () {
    return view('pages.admin.add.addblog');
})->name('admin.add.blog');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::fallback(function () {
    return view('components.notfound');
});

require __DIR__.'/auth.php';
