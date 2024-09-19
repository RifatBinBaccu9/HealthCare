<?php

namespace App\Http\Controllers;

use App\Models\Service;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
        //Services section
        public function service() {
            $getService=Service::get();
            return view('main-site.pages.service',['ServseStor'=>$getService]);
        }

        public function serviceFrom() {
            return view('admin-site.pages.from.addServiceFrom');
        }
        
        public function serviceData(Request $req) {
            $req->validate([
                'image' => 'required',
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
}
