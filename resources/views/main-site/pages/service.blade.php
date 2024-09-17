@extends('main-site')
@section('main-site')
 <!-- Services Start -->
 <div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Services</h5>
            <h1 class="display-4">Excellent Medical Services</h1>
        </div>
        <div class="row g-5">
            
            @foreach ($ServseStor as $serviceDataView)
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon mb-4">
                        <img src="{{asset($serviceDataView->image)}}" alt="Profile"  style="width: 155px; height: 105px;" class="rounded-circle">
                    </div>
                    <h4 class="mb-3">{{$serviceDataView->servesTitle}}</h4>
                    <p class="m-0">{{$serviceDataView->description}}</p>
                    <a class="btn btn-lg btn-primary rounded-pill" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Services End -->


<!-- Appointment Start -->
<div class="container-fluid bg-primary my-5 py-5">
    <div class="container py-5">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Appointment</h5>
                    <h1 class="display-4">Make An Appointment For Your Family</h1>
                </div>
                <p class="text-white mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                <a class="btn btn-dark rounded-pill py-3 px-5 me-3" href="">Find Doctor</a>
                <a class="btn btn-outline-dark rounded-pill py-3 px-5" href="">Read More</a>
            </div>
            <div class="col-lg-6">
                <div class="bg-white text-center rounded p-5">
                    <h1 class="mb-4">Book An Appointment</h1>
                    <form action="{{route('appointmentData')}}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <select name="department" class="@error('department') is-invalid @enderror form-select bg-white border-0" style="height: 55px;">
                                    <option selected>Choose Department</option>
                                    <option value="Department 1">Department 1</option>
                                    <option value="Department 2">Department 2</option>
                                    <option value="Department 3">Department 3</option>
                                </select>
                                @error('department')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6">
                                <select name="doctor" class="@error('doctor') is-invalid @enderror form-select bg-white border-0" style="height: 55px;">
                                    <option selected>Select Doctor</option>
                                    <option value="Rifat Mia">Rifat Mia</option>
                                    <option value="Ratul Islem">Ratul Islem</option>
                                    <option value="Ahamed sojib">Ahamed sojib</option>
                                </select>
                                @error('doctor')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" name="name" class="@error('name') is-invalid @enderror form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" name="email" class="@error('email') is-invalid @enderror  form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="number" name="phone" class="@error('phone') is-invalid @enderror form-control bg-light border-0" placeholder="Your Phone" style="height: 55px;">
                                @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6">
                                <select name="sex" class="@error('sex') is-invalid @enderror form-select bg-light border-0" style="height: 55px;">
                                    <option selected>Select Sex</option>
                                    <option value="Male">Male</option>
                                    <option value="female">female</option>
                                    <option value="custome">custome</option>
                                </select>
                                @error('sex')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text" name="date"
                                        class="@error('date') is-invalid @enderror form-control bg-light border-0 datetimepicker-input"
                                        placeholder="Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                        @error('date')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="text" name="time"
                                        class="@error('time') is-invalid @enderror form-control bg-light border-0 datetimepicker-input"
                                        placeholder="Time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                        @error('time')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            @if (Auth::check())
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Make An Appointment</button>
                            </div>
                            @else
                            <div class="col-12">
                                <a href="{{route('logIn')}}" class="btn btn-primary w-100 py-3" >Make An Appointment</a>
                            </div>   
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->


<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Testimonial</h5>
            <h1 class="display-4">Patients Say About Our Services</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-5">
                            <img class="img-fluid rounded-circle mx-auto" src="main-site/img/testimonial-1.jpg" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                <i class="fa fa-quote-left fa-2x text-primary"></i>
                            </div>
                        </div>
                        <p class="fs-4 fw-normal">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat. Erat dolor rebum sit ipsum.</p>
                        <hr class="w-25 mx-auto">
                        <h3>Patient Name</h3>
                        <h6 class="fw-normal text-primary mb-3">Profession</h6>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-5">
                            <img class="img-fluid rounded-circle mx-auto" src="main-site/img/testimonial-2.jpg" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                <i class="fa fa-quote-left fa-2x text-primary"></i>
                            </div>
                        </div>
                        <p class="fs-4 fw-normal">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat. Erat dolor rebum sit ipsum.</p>
                        <hr class="w-25 mx-auto">
                        <h3>Patient Name</h3>
                        <h6 class="fw-normal text-primary mb-3">Profession</h6>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-5">
                            <img class="img-fluid rounded-circle mx-auto" src="main-site/img/testimonial-3.jpg" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                <i class="fa fa-quote-left fa-2x text-primary"></i>
                            </div>
                        </div>
                        <p class="fs-4 fw-normal">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat. Erat dolor rebum sit ipsum.</p>
                        <hr class="w-25 mx-auto">
                        <h3>Patient Name</h3>
                        <h6 class="fw-normal text-primary mb-3">Profession</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
@endsection