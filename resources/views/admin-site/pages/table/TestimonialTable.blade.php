@extends('admin-site')
@section('admin-site')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Testimonial List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{route('addTestimonial')}}" style="color: rgb(214, 11, 221);">Testimonial Liat</a></li>
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
                  @foreach ($testimonialData as $testimonialDataView)
                  <tr>
                    <td>
                      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" >
                      <img src="{{asset($testimonialDataView->image)}}" alt="Profile" class="rounded-circle" style="width: 50px; height: 50px;">
                    </a></td>
                    <td>{{$testimonialDataView->name}}</td>
                    <td>{{$testimonialDataView->profeson}}</td>
                    <td>{{$testimonialDataView->description}}</td>
                    {{-- <td>
                      <a href="{{route('serviceDataEdit', $serviceDataView->id)}}" ><span>Update</span></a>
                      <a href="{{route('serviceDatadelete', $serviceDataView->id)}}" ><span>Delete</span></a>
                  </td> --}}
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