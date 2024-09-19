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
                <form action="{{route('doctorTeamData')}}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="row gy-3 overflow-hidden">
                    <div class="row mb-3">
                      <label for="formFile" class="col-sm-3 col-form-label" style="color: rgb(236, 8, 168);">Serves Image Upload</label>
                      <div class="col-sm-9">
                        <input class="form-control @error('image') is-invalid @enderror" name="image" type="file" id="formFile">
                        @error('image')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('doctorName') is-invalid @enderror" name="doctorName" id="doctorName" placeholder="Doctor Name">
                        <label for="doctorName" class="form-label">Doctor Name</label>
                        @error('doctorName')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('ProfessionalExpart') is-invalid @enderror" name="ProfessionalExpart" id="ProfessionalExpart" placeholder="Professional Expart">
                        <label for="ProfessionalExpart" class="form-label">Professional Expart</label>
                        @error('ProfessionalExpart')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('tuitarLink') is-invalid @enderror" name="tuitarLink" id="tuitarLink" placeholder="Tuitar Link">
                        <label for="tuitarLink" class="form-label">Tuitar Link</label>
                        @error('tuitarLink')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('FacbookLink') is-invalid @enderror" name="FacbookLink" id="FacbookLink" placeholder="Facbook Link">
                        <label for="FacbookLink" class="form-label">Facbook Link</label>
                        @error('FacbookLink')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('linkedinLink') is-invalid @enderror" name="linkedinLink" id="linkedinLink" placeholder="linkedin Link">
                        <label for="linkedinLink" class="form-label">linkedin Link</label>
                        @error('linkedinLink')
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