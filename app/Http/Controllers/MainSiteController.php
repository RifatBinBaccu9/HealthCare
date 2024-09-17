<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MainSiteController extends Controller
{
       //main-site-pages section
       public function home() {
        $getService=Service::get();
        return view('main-site.pages.home',['ServseStor'=>$getService]);
    }
    public function about() {
        return view('main-site.pages.about');
    }
    
    //Services section
    public function service() {
        $getService=Service::get();
        return view('main-site.pages.service',['ServseStor'=>$getService]);
    }
    public function serviceData(Request $req) {
        $req->validate([
            'servesTitle' => 'required',
            'description' => 'required',
        ],
        [
        'servesTitle.required' => 'Enter the Serves Title.',
        'description.required' => 'Enter your Description.',
        ]);

        if(! is_dir(public_path('admin-site/img/new'))){
          mkdir(public_path('admin-site/img/new'), 0777, true);
        }

        $serviceData=[
            'servesTitle'=>$req->servesTitle,
            'description'=>$req->description,
        ];

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $name = $image->getClientOriginalName();
            $imageName = time() . '_' . $name;
        
            $image->move(public_path('admin-site/img/new'), $imageName);
        
            $serviceData['image'] = 'admin-site/img/new/' . $imageName;
        } 
        Service::create($serviceData);
        Alert::success('Success', 'Your data was sent successfully.');
        return redirect()->back();
    }
    public function serviceDataEdit($id){
        $dataService=Service::where(['id'=>$id])->first();
        return view('admin-site.pages.from.serviceFromUpdate',['storingService'=>$dataService]);
    }
    public function serviceDataUpdate(Request $req){
        $req->validate([
            'servesTitle' => 'required',
            'description' => 'required',
        ],
        [
        'servesTitle.required' => 'Enter the Serves Title.',
        'description.required' => 'Enter your Description.',
        ]);

        if(! is_dir(public_path('admin-site/img/new'))){
          mkdir(public_path('admin-site/img/new'), 0777, true);
        }

        $serviceData=[
            'servesTitle'=>$req->servesTitle,
            'description'=>$req->description,
        ];

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $name = $image->getClientOriginalName();
            $imageName = time() . '_' . $name;
        
            $image->move(public_path('admin-site/img/new'), $imageName);
        
            $serviceData['image'] = 'admin-site/img/new/' . $imageName;
        } 
        Service::where(['id'=>$req->id])->update($serviceData);
        return redirect()->route('serviceTable');
    }
    public function serviceTable() {
       $getService=Service::get();
        return view('admin-site.pages.table.serviceTable', ['ServseStor'=>$getService]);
    }
    public function serviceDatadelete($id){
        $dataService=Service::where(['id'=>$id])->delete();
        return redirect()->back();
    }
    public function serviceFrom() {
        return view('admin-site.pages.from.serviceFrom');
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

   // contact section
    public function contact() {
        return view('main-site.pages.contact');
    }
    public function contactData (Request $req){
        $req->validate([
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required',
            'Subject' => 'required',
            'message' => 'required',
        ],[
        'name.required' => 'Enter your name.',
        'email.required' => 'Enter your email.',
        'email.email' => 'Enter a valid email.',
        'phone.required' => 'Enter your phone number.',
        'Subject.required' => 'Enter the subject.',
        'message.required' => 'Enter your message.',
        ]);
        $contact=[
            'name'=>$req->name,
            'email'=>$req->email,
            'phone'=>$req->phone,
            'Subject'=>$req->Subject,
            'message'=>$req->message,
        ];
        try {
            Contact::create($contact);
    
            Alert::success('Success', 'Your data was sent successfully.');
    
        } catch (\Exception $e) {
            Alert::error('Error', 'An error occurred while sending your message.');
        }
    
     return redirect()->back();
}
    public function contactTable(){
        $contactData=Contact::get();
        return view('admin-site.pages.table.contactTable',['contactDataStor'=>$contactData]);
    }
}
