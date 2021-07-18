<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ClubController;
use App\Http\Controllers\User\HelpController;
use App\Http\Controllers\User\CommentsController;


Route::group(['middleware' => ['auth', 'role:user']], function() {
    
    //Register a club
    Route::get('/register-club', [ClubController::class, 'create'])->name('user.club.create');
    Route::post('/register-club', [ClubController::class, 'store'])->name('user.club.store');

    //View Clubs
    Route::get('/clubs', [ClubController::class, 'index'])->name('user.club.index');
    Route::get('/club/{id}/join', [ClubController::class, 'join'])->name('user.club.join');
    Route::post('/club/{id}/join', [ClubController::class, 'joined'])->name('user.club.joined');
    Route::get('/clubs/joined', [ClubController::class, 'view'])->name('user.clubs.joined');

});

Route::group(['middleware' => ['auth']], function() {
    
    //Comments
    Route::get('/comments', [CommentsController::class, 'index'])->name('user.comments.index');
    Route::post('/comment/{id}/store', [CommentsController::class, 'store'])->name('user.comment.store');
    Route::get('/comment/{id}/show', [CommentsController::class, 'show'])->name('user.comment.show');
    Route::delete('/comment/{id}/destroy', [CommentsController::class, 'destroy'])->name('user.comment.destroy');

    //Help Request
    Route::get('/user/help-requests/index', [HelpController::class, 'index'])->name('user.help-requests.index');
    Route::get('/user/help-request/create', [HelpController::class, 'create'])->name('user.help-request.create');
    Route::post('/user/help-request/store', [HelpController::class, 'store'])->name('user.help-request.store');
    Route::get('/user/help-request/{id}/show', [HelpController::class, 'show'])->name('user.help-request.show');
    Route::delete('/user/help-request/{id}/destroy', [HelpController::class, 'destroy'])->name('user.help-request.destroy');
});