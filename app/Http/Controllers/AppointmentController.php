<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AppointmentController extends Controller
{
        // appointment section
        public function appointment() {
            return view('main-site.pages.appointment');
        }
        public function appointmentData (Request $req){
            $req->validate([
                'department'=>'required|in:Department 1,Department 2,Department 3',
                'doctor'=>'required|in:Rifat Mia,Ratul Islem,Ahamed sojib',
                'name'=>'required',
                'email'=>'required|email:rfc,dns',
                'phone'=>'required',
                'sex'=>'required|in:Male,female,custome',
                'date'=>'required',
                'time'=>'required',
            ],
            [
             'department.required' => 'Selectet the department.',
             'department.in' => 'Selectet the department.',
        
             'doctor.required' => 'Selectet the doctor.',
             'doctor.in' => 'Selectet the doctor',
    
             'name.required'=>'Tyep your name.',
    
             'email.required'=>'Tyep your email.',
             'email.email'=>'Your email in-invalid.',
    
             'phone.required'=>'Tyep your phone.',
    
             'sex.required' => 'Selectet the sex.',
             'sex.in' => 'Selectet the sex.',
             
             'date.required'=>'Tyep your date.',
             'time.required'=>'Tyep your time.',
            ]);
                $data=[
                    'department'=>$req->department,
                    'doctor'=>$req->doctor,
                    'name'=>$req->name,
                    'email'=>$req->email,
                    'phone'=>$req->phone,
                    'sex'=>$req->sex,
                    'date'=>$req->date,
                    'time'=>$req->time,
                ];
             try {
                Booking::create($data);
        
                Alert::success('Success', 'Your Appointment  was sent successfully.');
        
            } catch (\Exception $e) {
                Alert::error('Error', 'An error occurred while sending your message.');
            }
             return redirect()->route('Appointment');
        }
           public function appointmentTable(){
            $bookingData=Booking::get();
            return view('admin-site.pages.table.appointmentTable', ['appointment'=>$bookingData]);
        }
}
