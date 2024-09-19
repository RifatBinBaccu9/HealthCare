@extends('user-site')
@section('user-site')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Contect</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{route('userContectFrom')}}" style="color: rgb(214, 11, 221);">Contect</a></li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->
    
        <section class="section contact">
    
          <div class="row gy-4">
    
            <div class="col-xl-6">
    
              <div class="row">
                <div class="col-lg-6">
                  <div class="info-box card">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Address</h3>
                    <p>A108 Adam Street,<br>New York, NY 535022</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="info-box card">
                    <i class="bi bi-telephone"></i>
                    <h3>Call Us</h3>
                    <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="info-box card">
                    <i class="bi bi-envelope"></i>
                    <h3>Email Us</h3>
                    <p>info@example.com<br>contact@example.com</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="info-box card">
                    <i class="bi bi-clock"></i>
                    <h3>Open Hours</h3>
                    <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                  </div>
                </div>
              </div>
    
            </div>
    
            <div class="col-xl-6">
              <div class="card p-4">
                <form action="{{ route('contactData') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <!-- Name Field -->
                        <div class="col-12 col-sm-6">
                            <input 
                                name="name" 
                                type="text" 
                                class="form-control bg-light border-0 @error('name') is-invalid @enderror" 
                                placeholder="Your Name" 
                                style="height: 55px;" 
                            >
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <!-- Email Field -->
                        <div class="col-12 col-sm-6">
                            <input 
                                type="email" 
                                name="email" 
                                class="form-control bg-light border-0 @error('email') is-invalid @enderror" 
                                placeholder="Your Email" 
                                style="height: 55px;"     
                            >
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <!-- Phone Field -->
                        <div class="col-12">
                            <input 
                                type="text" 
                                name="phone" 
                                class="form-control bg-light border-0 @error('phone') is-invalid @enderror" 
                                placeholder="Your Phone" 
                                style="height: 55px;" 
                            >
                            @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <!-- Subject Field -->
                        <div class="col-12">
                            <input 
                                type="text" 
                                name="Subject" 
                                class="form-control bg-light border-0 @error('Subject') is-invalid @enderror" 
                                placeholder="Subject" 
                                style="height: 55px;" 
                            >
                            @error('Subject')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <!-- Message Field -->
                        <div class="col-12">
                            <textarea 
                                name="message" 
                                class="form-control bg-light border-0 @error('message') is-invalid @enderror" 
                                rows="5" 
                                placeholder="Message" 
                            ></textarea>
                            @error('message')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <!-- Submit Button -->
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
              </div>
    
            </div>
    
          </div>
    
        </section>
    <!-- End #main -->
  </main>
@endsection