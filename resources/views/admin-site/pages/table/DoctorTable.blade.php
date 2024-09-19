@extends('admin-site')
@section('admin-site')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Doctor List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{route('doctorTeamDataList')}}" style="color: rgb(214, 11, 221);">Doctor Liat</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card" style="padding-top: 20px;">
            <div class="card-body">

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Serves Image</th>
                    <th>Doctor Name</th>
                    <th>Professional Expart</th>
                    <th>Tuitar Link</th>
                    <th>Facbook Link</th>
                    <th>Linkedin Link</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($doctorStor as $DoctorDataView)
                  <tr>
                    <td>
                      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" >
                      <img src="{{asset($DoctorDataView->image)}}" alt="Profile" class="rounded-circle" style="width: 50px; height: 50px;">
                    </a></td>
                    <td>{{$DoctorDataView->doctorName}}</td>
                    <td>{{$DoctorDataView->ProfessionalExpart}}</td>
                    <td>{{$DoctorDataView->tuitarLink}}</td>
                    <td>{{$DoctorDataView->FacbookLink}}</td>
                    <td>{{$DoctorDataView->linkedinLink}}</td>
                    <td>{{$DoctorDataView->description}}</td>
                    <td>
                      {{-- <a href="{{route('serviceDataEdit', $serviceDataView->id)}}" ><span>Update</span></a>
                      <a href="{{route('serviceDatadelete', $serviceDataView->id)}}" ><span>Delete</span></a> --}}
                  </td>
                  </tr>
                  @endforeach
                 </tbody>               


              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  @endsection