<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DoctorTeamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SignupLoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
//main-site section
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about']);

//Services section
Route::get('/service', [ServicesController::class, 'service']);
Route::post('/serviceData', [ServicesController::class, 'serviceData'])->name('serviceData');
Route::get('/serviceDataEdit/{id}', [ServicesController::class, 'serviceDataEdit'])->name('serviceDataEdit');
Route::post('/serviceDataUpdate', [ServicesController::class, 'serviceDataUpdate'])->name('serviceDataUpdate');
Route::get('/serviceDatadelete/{id}', [ServicesController::class, 'serviceDatadelete'])->name('serviceDatadelete');
Route::get('/serviceFrom', [ServicesController::class, 'serviceFrom'])->name('serviceFrom');
Route::get('/serviceTable', [ServicesController::class, 'serviceTable'])->name('serviceTable');

//doctorTeam section
Route::get('/doctorTeam', [DoctorTeamController::class, 'doctorTeam'])->name('DoctorTeam');
Route::get('/doctorTeamAddFrom', [DoctorTeamController::class, 'doctorTeamAddFrom'])->name('doctorTeamAddFrom');
Route::post('/doctorTeamData', [DoctorTeamController::class, 'doctorTeamData'])->name('doctorTeamData');
Route::get('/doctorTeamDataList', [DoctorTeamController::class, 'doctorTeamDataList'])->name('doctorTeamDataList');

Route::get('/testimonial', [HomeController::class, 'testimonial']);

// appointment section
Route::get('/appointment', [AppointmentController::class, 'appointment'])->name('Appointment');
Route::post('/appointmentData', [AppointmentController::class, 'appointmentData'])->name('appointmentData');
Route::get('/appointmentTable', [AppointmentController::class, 'appointmentTable'])->name('appointmentTable');
Route::get('/addSelectDoctorName', [AppointmentController::class, 'addSelectDoctorName']);
Route::post('/addSelectDoctorPush', [AppointmentController::class, 'addSelectDoctorPush'])->name('addSelectDoctorPush');

// contact section
Route::get('/contact', [ContactController::class, 'contact'])->name('ContactUs');
Route::post('/contactData', [ContactController::class, 'contactData'])->name('contactData');
Route::get('/contactTable', [ContactController::class, 'contactTable'])->name('contactTable');

//main-site-signup section
Route::get('/signUp', [SignupLoginController::class, 'signUp'])->name('signUp');
Route::post('/signupData', [SignupLoginController::class, 'signupData'])->name('signup-Data');
Route::post('/updateProfile', [SignupLoginController::class, 'updateProfile'])->name('updateProfile');
Route::post('/updatePassword', [SignupLoginController::class, 'updatePassword'])->name('updatePassword');

//main-site-login section
Route::get('/logIn', [SignupLoginController::class, 'logIn'])->name('logIn');
Route::post('/logInData', [SignupLoginController::class, 'logInData'])->name('logInData');
Route::get('/logOut', [SignupLoginController::class, 'logOut'])->name('logOut');

//admin-site section
Route::get('/admin', [AdminController::class, 'admin'])->name('adminHome')->middleware('admin');
Route::get('/addTestimonial', [AdminController::class, 'addTestimonial'])->name('addTestimonial');
Route::post('/addTestimonialData', [AdminController::class, 'addTestimonialData'])->name('addTestimonialData');
Route::get('/testimonialList', [AdminController::class, 'testimonialList'])->name('testimonialList');
Route::get('/adminProfile', [AdminController::class, 'adminProfile'])->name('adminProfile');

//user-site section
Route::get('/user', [UserController::class, 'user'])->name('user');
Route::get('/userContectFrom', [UserController::class, 'userContectFrom'])->name('userContectFrom');
Route::get('/userAppointmentTable', [UserController::class, 'userAppointmentTable'])->name('userAppointmentTable');
Route::get('/userProfile', [UserController::class, 'userProfile'])->name('userProfile');
