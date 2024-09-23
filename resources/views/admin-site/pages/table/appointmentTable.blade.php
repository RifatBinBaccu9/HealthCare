@extends('admin-site')
@section('admin-site')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Appointment List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{route('appointmentTable')}}" style="color: rgb(214, 11, 221);">Appointment List</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card" style="padding-top: 20px;">
            <div class="card-body">
                        <!-- Scrollable Table Container -->
                        <div style="max-height: 400px; max-width:1000px; overflow: auto;">
              <!-- Table with stripped rows -->
              <table class="table datatable" >
                <thead>
                  <tr>
                    <th>
                      <b>N</b>ame
                    </th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Department</th>
                    <th>Doctor</th>
                    <th>Sex</th>
                    <th>Date</th>
                    <th>Time</th>
                  </tr>
                </thead>

                
                <tbody>
                  @foreach ($appointment as $appointmentView)
                  <tr>
                    <td>{{$appointmentView->name}}</td>
                    <td>{{$appointmentView->phone}}</td>
                    <td>{{$appointmentView->email}}</td>
                    <td>{{$appointmentView->department}}</td>
                    <td>{{$appointmentView->doctor}}</td>
                    <td>{{$appointmentView->sex}}</td>
                    <td>{{$appointmentView->date}}</td>
                    <td>{{$appointmentView->time}}</td>
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