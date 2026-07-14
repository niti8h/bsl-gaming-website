<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\BlogController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('auth')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
        Route::post('settings', [SettingController::class, 'store'])->name('settings.store');
        Route::get('appearance', [\App\Http\Controllers\Admin\AppearanceController::class, 'index'])->name('appearance.index');
        Route::post('appearance', [\App\Http\Controllers\Admin\AppearanceController::class, 'store'])->name('appearance.store');
        Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);
        Route::resource('blogs', BlogController::class)->except(['show']);
        Route::resource('testimonials', \App\Http\Controllers\Admin\TestimonialController::class)->except(['show']);
    });
});

Route::get('/', function () {
    $testimonials = \App\Models\Testimonial::where('is_active', true)->orderBy('sort_order')->orderBy('id', 'desc')->get();
    $latestBlogs = \App\Models\Blog::orderBy('published_at', 'desc')->take(3)->get();
    $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
    return view('home', compact('testimonials', 'latestBlogs', 'settings'));
});

Route::post('/contact/submit', [\App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');

Route::get('/blog/{slug}', function ($slug) {
    if (view()->exists("blog.{$slug}")) {
        return view("blog.{$slug}");
    }
    
    $post = \App\Models\Blog::where('slug', $slug)->first();
    if ($post) {
        return view('single-blog-dynamic', compact('post'));
    }
    
    abort(404);
})->where('slug', '.*');

Route::get('/{slug}', function ($slug) {
    if (view()->exists($slug)) {
        return view($slug);
    }
    
    abort(404);
})->where('slug', '.*');

