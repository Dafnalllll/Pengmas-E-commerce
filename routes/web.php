<?php

use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Frontend\ProductController as FrontendProductController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Frontend\BlogController as FrontendBlogController;
use App\Http\Controllers\Admin\SopController as AdminSopController;
use App\Http\Controllers\Frontend\SopController as FrontendSopController;
use App\Http\Controllers\ProfileController;
use App\Models\Sop; // ← TAMBAHKAN INI
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\MonitoringController;

Route::middleware(['track.page'])->group(function () {

    //User Routes
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/blog', [FrontendBlogController::class, 'index'])->name('blogs');
    Route::get('/blog/{id}', [FrontendBlogController::class, 'show'])->name('blog.detail');
    // GANTI ROUTE INI (baris 18-20)
    Route::get('/standar-operasional-prosedur', function () {
        $sops = Sop::latest()->get();
        return view('pages.user.sop', compact('sops'));
    })->name('sop');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/product', [FrontendProductController::class, 'index'])->name('products');

    Route::get('/contact', function () {
        return view('pages.user.contact');
    })->name('contact');

    Route::get('/blog-detail', function () {
        return view('components.blogdetail');
    });

    Route::get('/sop-detail', function () {
        return view('components.sopdetail');
    });

});

// ==========================================
// ADMIN ROUTES - PROTECTED WITH AUTH MIDDLEWARE
// ==========================================
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    // Dashboard Admin
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/statistics', [AdminController::class, 'statistics'])->name('statistics');

    // Monitoring Route
    Route::get('/monitoring', [MonitoringController::class, 'index'])->name('monitoring');



    // Route Produk
    Route::get('/products', [AdminProductController::class, 'index'])
        ->name('products');
    Route::get('/products/create', [AdminProductController::class, 'create'])
        ->name('products.create');
    Route::post('/products/store', [AdminProductController::class, 'store'])
        ->name('products.store');
    Route::get('/products/{id}/edit', [AdminProductController::class, 'edit'])
        ->name('products.edit');
    Route::put('/products/{id}', [AdminProductController::class, 'update'])
        ->name('products.update');
    Route::delete('/products/{id}', [AdminProductController::class, 'destroy'])
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

// Route ini juga harus diprotect
Route::middleware(['auth'])->group(function () {
    Route::get('/productmanage', function () {
        return view('pages.admin.productadmin');
    })->name('admin.product');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::fallback(function () {
    return view('components.notfound');
});

require __DIR__ . '/auth.php';
