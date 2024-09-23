@extends('main-site')
@section('main-site')
    <!-- Appointment Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Appointment</h5>
                        <h1 class="display-4">Make An Appointment For Your Family</h1>
                    </div>
                    <p class="mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 me-3" href="{{route('DoctorTeam')}}">Find Doctor</a>
                    <a class="btn btn-outline-primary rounded-pill py-3 px-5" href="">Read More</a>
                </div>
                <div class="col-lg-6">
                    <div class="bg-light text-center rounded p-5">
                        <h1 class="mb-4">Book An Appointment</h1>
                        <form action="{{route('appointmentData')}}" method="POST">
                            @csrf
                            <div class="row g-3">
                                
                                <div class="col-12 col-sm-6">
                                    <select name="doctor" class="@error('doctor') is-invalid @enderror form-select bg-white border-0" style="height: 55px;">
                                        <option selected>Select Doctor</option>
                                        @foreach ($select as $addDoctor)
                                        <option value="{{$addDoctor->name}}">{{$addDoctor->name}}</option>  
                                        @endforeach
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
@endsection