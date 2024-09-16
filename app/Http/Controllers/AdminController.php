<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function admin(){
        return view('admin-site.pages.home');
    }
   public function bookingTable(){
        return view('admin-site.pages.table.bookTable');
    }
}
