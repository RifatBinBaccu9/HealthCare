<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function user(){
        $user = Auth::user();
        return view('user-site.pages.home', compact('user'));
    }
    public function userAppointmentTable(){
        $user = Auth::user();
        $bookingData=Booking::get();
        return view('user-site.pages.appointmentTable', ['appointment'=>$bookingData],compact('user'));
    }
    public function userContectFrom(){
        $user = Auth::user();
        return view('user-site.pages.userContectFrom',compact('user'));
    }
    public function userProfile(){
        $user = Auth::user();
        return view('user-site.pages.userProfile', compact('user'));
    
    }
}
