@extends('admin-site')
@section('admin-site')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Appointment Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{route('adminHome')}}">Admin Dashboard Tables</a></li>
          <li class="breadcrumb-item active"><a href="{{route('appointmentTable')}}" style="color: rgb(214, 11, 221);">Appointment Table</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Appointment Table</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library.</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
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