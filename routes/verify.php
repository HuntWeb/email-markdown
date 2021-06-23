<?php 

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| Web Routes for Email Verification
|--------------------------------------------------------------------------
|
| https://www.youtube.com/watch?v=MGg-d44VvdQ
| 
| https://www.youtube.com/watch?v=JYQAOdm_1wk
https://laravel.com/docs/8.x/verification#introduction
|
*/


// The Email Verification Notice
Route::get('/email/verify', function () {
                                return view('auth.verify-email');
                            })->middleware('auth')->name('verification.notice');


// The Email Verification Handler
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
                            $request->fulfill();

                            return redirect('/home');
                        })->middleware(['auth', 'signed'])->name('verification.verify');


// Resending The Verification Email
Route::post('/email/verification-notification', function (Request $request) {
                        $request->user()->sendEmailVerificationNotification();

                        return back()->with('message', 'Verification link sent!');
                        })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

                        
// Protecting Routes
Route::get('/profile', function () {
    // Only verified users may access this route...
})->middleware('verified');

