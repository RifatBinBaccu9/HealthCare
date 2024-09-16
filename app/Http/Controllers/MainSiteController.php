<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainSiteController extends Controller
{
       //main-site-pages section
       public function home() {
        return view('main-site.pages.home');
    }
    public function about() {
        return view('main-site.pages.about');
    }
    public function service() {
        return view('main-site.pages.service');
    }
    public function OurCliend() {
        return view('main-site.pages.OurCliend');
    }
    public function doctorTeam() {
        return view('main-site.pages.team');
    }
    public function testimonial() {
        return view('main-site.pages.testimonial');
    }
    public function appointment() {
        return view('main-site.pages.appointment');
    }
    public function contact() {
        return view('main-site.pages.contact');
    }
}
