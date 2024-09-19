<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        return view('user-site.pages.home');
    }
    public function userAppointmentTable(){
        $bookingData=Booking::get();
        return view('user-site.pages.appointmentTable', ['appointment'=>$bookingData]);
    }
    public function userContectFrom(){
        return view('user-site.pages.userContectFrom');
    }
    public function userProfile(){
        return view('user-site.pages.userProfile');
    }
}
