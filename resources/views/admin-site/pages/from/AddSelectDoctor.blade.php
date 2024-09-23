@extends('admin-site')
@section('admin-site')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Doctor</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{route('serviceFrom')}}" style="color: rgb(214, 11, 221);">Add Doctor</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <div class="card-body px-3 px-md-4 px-xl-5 py-1 py-md-3 py-xl-4">
                <div class="row">
                  <div class="col-12">
                    <div class="mb-4">
                      <h2 class="h3 pb-3">Create Doctor Data</h2>
                    </div>
                  </div>
                </div>
                <form action="{{route('addSelectDoctorPush')}}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="row gy-3 overflow-hidden">
                    <div class="col-12">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control " name="name" id="doctorName" placeholder="Doctor Name">
                        <label for="doctorName" class="form-label">Select Doctor Name</label>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Create Doctor Data</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  @endsection