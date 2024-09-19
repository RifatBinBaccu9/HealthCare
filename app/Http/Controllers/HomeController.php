<?php

namespace App\Http\Controllers;

use App\Models\DoctorTeam;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
      //main-site-pages section
      public function home() {
        $getService=Service::get();
        $doctorData=DoctorTeam::get();
        return view('main-site.pages.home',['ServseStor'=>$getService] ,['doctorStor'=>$doctorData]);
    }

    public function about() {
        return view('main-site.pages.about');
    }
    public function OurCliend() {
        return view('main-site.pages.OurCliend');
    }
    public function testimonial() {
        return view('main-site.pages.testimonial');
    }
}
