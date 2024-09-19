<?php

namespace App\Http\Controllers;

use App\Models\DoctorTeam;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DoctorTeamController extends Controller
{
    public function doctorTeam() {
        $doctorData=DoctorTeam::get();
        return view('main-site.pages.team',['doctorStor'=>$doctorData]);
    }

    public function doctorTeamAddFrom() {
        return view('admin-site.pages.from.addDoctorFrom');
    }

       public function doctorTeamData(Request $req) {
            $req->validate([
                'image' => 'required',
                'doctorName' => 'required',
                'ProfessionalExpart' => 'required',
                'tuitarLink' => 'required',
                'FacbookLink' => 'required',
                'linkedinLink' => 'required',
                'description' => 'required',
            ],
            [
            'servesTitle.required' => 'Enter the Serves Title.',
            'description.required' => 'Enter your Description.',
            ]);
    
            if(! is_dir(public_path('admin-site/img/doctorImag'))){
              mkdir(public_path('admin-site/img/doctorImag'), 0777, true);
            }
    
            $serviceData=[
                'doctorName'=>$req->doctorName,
                'ProfessionalExpart'=>$req->ProfessionalExpart,
                'tuitarLink'=>$req->tuitarLink,
                'FacbookLink'=>$req->FacbookLink,
                'linkedinLink'=>$req->linkedinLink,
                'description'=>$req->description,
            ];
    
            if ($req->hasFile('image')) {
                $image = $req->file('image');
                $name = $image->getClientOriginalName();
                $imageName = time() . '_' . $name;
            
                $image->move(public_path('admin-site/img/doctorImag'), $imageName);
            
                $serviceData['image'] = 'admin-site/img/doctorImag/' . $imageName;
            } 
            DoctorTeam::create($serviceData);
            Alert::success('Success', 'Your data was sent successfully.');
            return redirect()->back();
        }
        public function doctorTeamDataList(){
            $doctorData=DoctorTeam::get();
            return view('admin-site.pages.table.DoctorTable',['doctorStor'=>$doctorData]);
        }
}
