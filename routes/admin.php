<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\RequestController;
use App\Http\Controllers\Admin\DashboardController;


Route::group(['middleware' => ['auth', 'role:admin']], function() {

    //Blogs
    Route::get('/blogs', [BlogController::class, 'index'])->name('admin.blogs.index');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('admin.blog.store');
    Route::get('/blogs/approve', [BlogController::class, 'approve'])->name('admin.blogs.approve');
    Route::put('/blog/{id}/approved', [BlogController::class, 'approved'])->name('admin.blog.approved');
    Route::get('/blog/{id}/show', [BlogController::class, 'show'])->name('admin.blog.show');
    Route::put('/blog/{id}/destoy', [BlogController::class, 'destroy'])->name('admin.blog.destroy');

    //Yoga video
    Route::get('/yoga-videos', [VideoController::class, 'index'])->name('admin.yoga-videos.index');
    Route::get('yoga-video/create', [VideoController::class, 'create'])->name('admin.yoga-video.create');
    Route::post('/yoga-video/store', [VideoController::class, 'store'])->name('admin.yoga-video.store');
    Route::get('/yoga-videos/approve', [VideoController::class, 'approve'])->name('admin.yoga-video.approve');
    Route::put('/yoga-video/{id}/approved', [VideoController::class, 'approved'])->name('admin.yoga-video.approved');
    Route::get('/yoga-video/{id}/show', [VideoController::class, 'show'])->name('admin.yoga-video.show');
    Route::delete('/yoga-video/{id}/destroy', [VideoController::class, 'destroy'])->name('admin.yoga-video.destroy');

    //Listing and approving club members
    Route::get('/clubs', [DashboardController::class, 'clubs'])->name('admin.club.index');
    Route::put('/club/{id}/add', [DashboardController::class, 'addClub'])->name('admin.club.add');
    Route::get('/club/{id}/details', [DashboardController::class, 'clubDetails'])->name('admin.club.details');

    //Users List
    Route::get('/admin/users-list', [DashboardController::class, 'usersList'])->name('admin.users-list');
    Route::get('/admin/user-details/{id}', [DashboardController::class, 'userDetails'])->name('admin.user-details');
    Route::delete('/admin/user-destroy/{id}', [DashboardController::class, 'userDestroy'])->name('admin.user-destroy');

    //All
    Route::get('/comments/all', [DashboardController::class, 'allComments'])->name('admin.comments.all');
    Route::get('/yoga-videos/all', [DashboardController::class, 'allVideos'])->name('admin.videos.all');
    Route::get('/blogs/all', [DashboardController::class, 'allBlogs'])->name('admin.blogs.all');

    //Requests
    Route::get('/subscribers/all', [RequestController::class, 'allSubscribers'])->name('admin.subscribers.all');
    Route::delete('/subscriber/{id}/delete', [RequestController::class, 'deleteSubscriber'])->name('admin.subscriber.delete');
    Route::get('/donations/all', [RequestController::class, 'allDonations'])->name('admin.donations.all');
    Route::put('/donation/{id}/status', [RequestController::class, 'changeDonationStatus'])->name('admin.donation.status');
    Route::delete('/donations/{id}/delete', [RequestController::class, 'deleteDonation'])->name('admin.donation.delete');
    Route::get('/contacts/all', [RequestController::class, 'allContacts'])->name('admin.contacts.all');
    Route::put('/contact/{id}/status', [RequestController::class, 'changeContactStatus'])->name('admin.contact.status');
    Route::delete('/contact/{id}/delete', [RequestController::class, 'deleteContact'])->name('admin.contact.delete');
});