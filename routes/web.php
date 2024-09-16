<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainSiteController;
use App\Http\Controllers\SignupLoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
//main-site section
Route::get('/', [MainSiteController::class, 'home'])->name('home');
Route::get('/about', [MainSiteController::class, 'about']);
Route::get('/service', [MainSiteController::class, 'service']);
Route::get('/OurCliend', [MainSiteController::class, 'OurCliend']);
Route::get('/doctorTeam', [MainSiteController::class, 'doctorTeam'])->name('DoctorTeam');
Route::get('/testimonial', [MainSiteController::class, 'testimonial']);
Route::get('/appointment', [MainSiteController::class, 'appointment'])->name('Appointment');
Route::get('/contact', [MainSiteController::class, 'contact'])->name('ContactUs');
//main-site-signup section
Route::get('/signUp', [SignupLoginController::class, 'signUp'])->name('signUp');
Route::post('/signupData', [SignupLoginController::class, 'signupData'])->name('signup-Data');
//main-site-login section
Route::get('/logIn', [SignupLoginController::class, 'logIn'])->name('logIn');
Route::post('/logInData', [SignupLoginController::class, 'logInData'])->name('logInData');
Route::get('/logOut', [SignupLoginController::class, 'logOut'])->name('logOut');

//admin-site section
Route::get('/admin', [AdminController::class, 'admin'])->name('adminHome');
Route::get('/bookingTable', [AdminController::class, 'bookingTable']);
//user-site section
Route::get('/user', [UserController::class, 'user']);