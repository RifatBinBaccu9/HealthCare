@extends('admin-site')
@section('admin-site')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Contact Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{route('adminHome')}}">Admin Dashboard Tables</a></li>
          <li class="breadcrumb-item active"><a href="{{route('serviceTable')}}" style="color: rgb(214, 11, 221);">Service Table</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Service Tables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library.</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Serves Image</th>
                    <th>Serves Title</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($ServseStor as $serviceDataView)
                  <tr>
                    <td>
                      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" >
                      <img src="{{asset($serviceDataView->image)}}" alt="Profile" class="rounded-circle" style="width: 50px; height: 50px;">
                    </a></td>
                    <td>{{$serviceDataView->servesTitle}}</td>
                    <td>{{$serviceDataView->description}}</td>
                    <td>
                      <a href="{{route('serviceDataEdit', $serviceDataView->id)}}" ><span>Update</span></a>
                      <a href="{{route('serviceDatadelete', $serviceDataView->id)}}" ><span>Delete</span></a>
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