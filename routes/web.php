<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainSiteController;
use App\Http\Controllers\SignupLoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
//main-site section
Route::get('/', [MainSiteController::class, 'home'])->name('home');
Route::get('/about', [MainSiteController::class, 'about']);

//Services section
Route::get('/service', [MainSiteController::class, 'service']);
Route::post('/serviceData', [MainSiteController::class, 'serviceData'])->name('serviceData');
Route::get('/serviceDataEdit/{id}', [MainSiteController::class, 'serviceDataEdit'])->name('serviceDataEdit');
Route::post('/serviceDataUpdate', [MainSiteController::class, 'serviceDataUpdate'])->name('serviceDataUpdate');
Route::get('/serviceFrom', [MainSiteController::class, 'serviceFrom'])->name('serviceFrom');
Route::get('/serviceTable', [MainSiteController::class, 'serviceTable'])->name('serviceTable');

Route::get('/OurCliend', [MainSiteController::class, 'OurCliend']);
Route::get('/doctorTeam', [MainSiteController::class, 'doctorTeam'])->name('DoctorTeam');
Route::get('/testimonial', [MainSiteController::class, 'testimonial']);

// appointment section
Route::get('/appointment', [MainSiteController::class, 'appointment'])->name('Appointment');
Route::post('/appointmentData', [MainSiteController::class, 'appointmentData'])->name('appointmentData');
Route::get('/appointmentTable', [MainSiteController::class, 'appointmentTable'])->name('appointmentTable');

// contact section
Route::get('/contact', [MainSiteController::class, 'contact'])->name('ContactUs');
Route::post('/contactData', [MainSiteController::class, 'contactData'])->name('contactData');
Route::get('/contactTable', [MainSiteController::class, 'contactTable'])->name('contactTable');

//main-site-signup section
Route::get('/signUp', [SignupLoginController::class, 'signUp'])->name('signUp');
Route::post('/signupData', [SignupLoginController::class, 'signupData'])->name('signup-Data');

//main-site-login section
Route::get('/logIn', [SignupLoginController::class, 'logIn'])->name('logIn');
Route::post('/logInData', [SignupLoginController::class, 'logInData'])->name('logInData');
Route::get('/logOut', [SignupLoginController::class, 'logOut'])->name('logOut');

//admin-site section
Route::get('/admin', [AdminController::class, 'admin'])->name('adminHome');

//user-site section
Route::get('/user', [UserController::class, 'user']);