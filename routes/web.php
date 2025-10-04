<?php

use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Frontend\ProductController as FrontendProductController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Frontend\BlogController as FrontendBlogController;
use App\Http\Controllers\Admin\SopController as AdminSopController;
use App\Http\Controllers\Frontend\SopController as FrontendSopController;


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//User Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('pages.user.blog');
});

Route::get('/standar-operasional-prosedur', function () {
    return view('pages.user.sop');
})->name('sop');

Route::get('/blog', [FrontendBlogController::class, 'index'])->name('product');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Produk
// Route::get('/product', function () {
//     return view('pages.user.product');
// })->name('product');
Route::get('/product', [FrontendProductController::class, 'index'])->name('blogs');

// SOP
// Route::get('/sop', [FrontendSopController::class, 'index'])->name('sops');

Route::get('/contact', function () {
    return view('pages.user.contact');
})->name('contact');


// Admin Routes
//Route lama
// Route::get('/dashboardadmin', function () {
//     return view('pages.admin.dashboardadmin');
// })->name('admin.dashboard');




Route::get('/productmanage', function () {
    return view('pages.admin.productadmin');
})->name('admin.product');


// Route::get('/admin/add/addproduct', function () {
//     return view('pages.admin.add.addproduct');
// })->name('admin.add.product');

//Route baru
Route::prefix('admin')->name('admin.')->group(function () {

    // 1. Dashboard Admin
    // URI: /admin/dashboardadmin | Nama: admin.dashboard
    Route::get('/', function () {
        return view('pages.admin.dashboardadmin');
    })->name('dashboard'); // Nama rute jadi 'admin.dashboard'

    // Route Produk
    Route::get('/products', [AdminProductController::class, 'index'])
        ->name('products');
    Route::get('/products/create', [AdminProductController::class, 'create'])
        ->name('products.create');
    Route::post('/products/store', [AdminProductController::class, 'store'])
        ->name('products.store');
    Route::get('admin/products/{id}/edit', [AdminProductController::class, 'edit'])
        ->name('products.edit');
    Route::put('admin/products/{id}', [AdminProductController::class, 'update'])
        ->name('products.update');
    Route::delete('admin/products/{id}', [AdminProductController::class, 'destroy'])
        ->name('products.destroy');

    // Route Blog
    Route::get('/blogs', [AdminBlogController::class, 'index'])
        ->name('blogs');
    Route::get('/blogs/create', [AdminBlogController::class, 'create'])
        ->name('blogs.create');
    Route::post('/blogs/store', [AdminBlogController::class, 'store'])
        ->name('blogs.store');
    Route::get('/blogs/{blog}/edit', [AdminBlogController::class, 'edit'])
        ->name('blogs.edit');
    Route::put('/blogs/{blog}', [AdminBlogController::class, 'update'])
        ->name('blogs.update');
    Route::delete('/blogs/{blog}', [AdminBlogController::class, 'destroy'])
        ->name('blogs.destroy');

    // Route SOP
    Route::get('/sops', [AdminSopController::class, 'index'])
        ->name('sops');
    Route::get('/sops/create', [AdminSopController::class, 'create'])
        ->name('sops.create');
    Route::post('/sops/store', [AdminSopController::class, 'store'])
        ->name('sops.store');
    Route::get('/sops/{sop}/edit', [AdminSopController::class, 'edit'])
        ->name('sops.edit');
    Route::put('/sops/{sop}', [AdminSopController::class, 'update'])
        ->name('sops.update');
    Route::delete('/sops/{sop}', [AdminSopController::class, 'destroy'])
        ->name('sops.destroy');
});

// Route::get('/sop', function () {
//     return view('pages.admin.sop');
// })->name('admin.sop');

// Route::get('/admin/add/addsop', function () {
//     return view('pages.admin.add.addsop');
// })->name('admin.add.sop');

// Route::get('/blogadmin', function () {
//     return view('pages.admin.blogadmin');
// })->name('admin.blog');

// Route::get('/admin/add/addblog', function () {
//     return view('pages.admin.add.addblog');
// })->name('admin.add.blog');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/blog-detail', function () {
    return view('components.blogdetail');
});

Route::get('/sop-detail', function () {
    return view('components.sopdetail');
});

Route::fallback(function () {
    return view('components.notfound');
});

require __DIR__ . '/auth.php';
