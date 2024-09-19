@extends('admin-site')
@section('admin-site')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Services Update</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{route('serviceFrom')}}" style="color: rgb(214, 11, 221);">Update Services</a></li>
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
                      <h2 class="h3 pb-3">Update Serves Data</h2>
                     
                    </div>
                  </div>
                </div>
                <form action="{{route('serviceDataUpdate')}}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="row gy-3 overflow-hidden">
                    <input type="hidden" name="id" value="{{$storingService->id}}">
                    <div class="row mb-3">
                      <label for="formFile" class="col-sm-3 col-form-label" style="color: rgb(236, 8, 168);">Serves Image Upload</label>
                      <div class="col-sm-9">
                        <input class="form-control" value="{{$storingService->image}}" name="image" type="file" id="formFile">
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-floating mb-3">
                        <input type="text" value="{{$storingService->servesTitle}}" class="form-control" name="servesTitle" id="servesTitle" placeholder="Serves Title">
                        <label for="servesTitle" class="form-label">Serves Title</label>
                      </div>
                    </div>

                    <div class="col-12">
                        <textarea 
                            name="description" 
                            class="form-control bg-light border-1" 
                            rows="5" 
                            placeholder="Derves Description" 
                        >{{$storingService->description}}</textarea>
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