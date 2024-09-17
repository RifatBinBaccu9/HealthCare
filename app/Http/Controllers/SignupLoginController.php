<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class SignupLoginController extends Controller
{
     //signUp section
 public function signUp() {
    return view('main-site.pages.signupLogin.signUp');
}
public function signupData(Request $req){
    $req->validate([
     'FullName'=>'required',
     'email'=>'required|email:rfc,dns',
     'password'=>'required',
     'password_confirmation'=>'required|same:password',
     'iAgree'=>'required'
    ]);
    $data=[
        'FullName'=>$req->FullName,
        'email'=>$req->email,
        'password'=>Hash::make($req->password),
        'iAgree'=>$req->iAgree == '1'? 1 : 0,
    ];
    User::create($data);
    Alert::success('Success sign up', 'Your sign up Success');
    return redirect()->route('logIn');
}

//Login section
public function logIn() {
    return view('main-site.pages.signupLogin.login');
}
public function logInData(Request $req){
 if(Auth::attempt(['email' => $req->email, 'password' => $req->password])){
    if(Auth::user()->is_tyep == 'admin'){
        Alert::success('Success Login', 'Your admin login Success');
        return redirect()->route('adminHome');
    }else{
        Alert::success('Success Login', 'Your user login Success');
        return redirect()->route('home');
    }
 }else{
    Alert::error('Error', 'An error occurred during login.');
    return redirect()->back();
 }
}
public function logOut(){
    Auth::logOut();
    Alert::success('Success Logout', 'Your logout Success ');
    return redirect()->back();
}
}
