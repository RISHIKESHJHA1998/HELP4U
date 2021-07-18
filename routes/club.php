<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Club\BlogController;
use App\Http\Controllers\Club\VideoController;
use App\Http\Controllers\Club\MemberController;

Route::group(['middleware' => ['auth', 'role:club']], function() {

    //Blogs
    Route::get('/blogs', [BlogController::class, 'index'])->name('club.blogs.index');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('club.blog.create');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('club.blog.store');
    Route::get('/blog/{id}/show', [BlogController::class, 'show'])->name('club.blog.show');
    Route::put('/blog/{id}/destoy', [BlogController::class, 'destroy'])->name('club.blog.destroy');

    //Yoga video
    Route::get('/yoga-videos', [VideoController::class, 'index'])->name('club.yoga-videos.index');
    Route::get('yoga-video/create', [VideoController::class, 'create'])->name('club.yoga-video.create');
    Route::post('/yoga-video/store', [VideoController::class, 'store'])->name('club.yoga-video.store');
    Route::get('/yoga-video/{id}/show', [VideoController::class, 'show'])->name('club.yoga-video.show');
    Route::delete('/yoga-video/{id}/destroy', [VideoController::class, 'destroy'])->name('club.yoga-video.destroy');

    //Members
    Route::get('/members', [MemberController::class, 'index'])->name('club.members.index');
    Route::put('/member/{id}/create', [MemberController::class, 'create'])->name('club.member.create');
    
});