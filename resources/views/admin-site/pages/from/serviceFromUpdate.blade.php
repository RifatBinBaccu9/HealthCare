@extends('admin-site')
@section('admin-site')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Services Froms</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{route('adminHome')}}">Admin Dashboard Froms</a></li>
          <li class="breadcrumb-item active"><a href="{{route('serviceFrom')}}" style="color: rgb(214, 11, 221);">Services Froms</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <div class="card-body p-3 p-md-4 p-xl-5">
                <div class="row">
                  <div class="col-12">
                    <div class="mb-4">
                      <h2 class="h3">Create Serves Data</h2>
                      <h3 class="fs-6 fw-normal text-secondary m-0">Get started with your serves data create now</h3>
                    </div>
                  </div>
                </div>
                <form action="{{route('serviceDataUpdate')}}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="row gy-3 overflow-hidden">
                    <input type="hidden" name="id" value="{{$storingService->id}}">
                    <div class="row mb-3">
                      <label for="formFile" class="col-sm-3 col-form-label">Serves Image Upload</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="image" type="file" id="formFile">
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('servesTitle') is-invalid @enderror" name="servesTitle" id="servesTitle" placeholder="Serves Title">
                        <label for="servesTitle" class="form-label">Serves Title</label>
                        @error('servesTitle')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>

                    <div class="col-12">
                        <textarea 
                            name="description" 
                            class="form-control bg-light border-1 @error('description') is-invalid @enderror" 
                            rows="5" 
                            placeholder="Derves Description" 
                        ></textarea>
                        @error('description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                      <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Create Serves Data</button>
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