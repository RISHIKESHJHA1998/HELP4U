<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestPagesController;


Route::get('/', [GuestPagesController::class, 'home'])->name('home');
Route::get('/about', [GuestPagesController::class, 'about'])->name('about');
Route::get('/contact', [GuestPagesController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/team', [GuestPagesController::class, 'team'])->name('team');
Route::get('/donate', [DonationController::class, 'create'])->name('donation');
Route::post('/donate', [DonationController::class, 'store'])->name('donation.store');

Route::group(['middlware' => ['auth']], function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/help-requests', [PagesController::class, 'helpRequests'])->name('help-requests');
Route::get('/help-request/{id}/show', [PagesController::class, 'helpRequestsShow'])->name('help-request.show');
Route::get('/blogs', [PagesController::class, 'blogs'])->name('blogs');
Route::get('/blog/{id}/show', [PagesController::class, 'blogShow'])->name('blog.show');
Route::get('/yoga-videos', [PagesController::class, 'yogaVideos'])->name('yoga-videos');

Route::post('/subscriber/store', [SubscriberController::class, 'store'])->name('subscriber.store');

require __DIR__.'/auth.php';

