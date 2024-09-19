@extends('admin-site')
@section('admin-site')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Services</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{route('serviceFrom')}}" style="color: rgb(214, 11, 221);">Add Services</a></li>
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
                      <h2 class="h3 pb-3">Create Serves Data</h2>
                    </div>
                  </div>
                </div>
                <form action="{{route('serviceData')}}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="row gy-3 overflow-hidden">
                    <div class="row mb-3">
                      <label for="formFile" class="col-sm-3 col-form-label" style="color: rgb(236, 8, 168);">Serves Image Upload</label>
                      <div class="col-sm-9">
                        <input class="@error('image') is-invalid @enderror form-control" name="image" type="file" id="formFile">
                        @error('image')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
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