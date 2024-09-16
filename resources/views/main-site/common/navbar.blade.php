<div class="container-fluid sticky-top bg-white shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a class="navbar-brand">
                <h1 class="m-0 text-uppercase text-primary" ><i class="fa fa-clinic-medical me-2"></i>Medinova</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ url('/service') }}" class="nav-item nav-link">Service</a>
                    <a href="{{ url('/OurCliend') }}" class="nav-item nav-link">Our Cliend</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{url('/doctorTeam')}}" class="dropdown-item">The Team</a>
                            <a href="{{url('/testimonial')}}" class="dropdown-item">Testimonial</a>
                            <a href="{{url('/appointment')}}" class="dropdown-item">Appointment</a>
                        </div>
                    </div>
                    <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
                    @if (Auth::user())
                       <div>
                        <li class="nav-item use">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <a class="user" href="{{url('/logOut')}}">
                       <span class="login"> Log Out </span>
                        </a>
                       </li>
                        </div>
                       @else
                       <div>
                        <li class="nav-item use">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <a class="user" href="{{url('/signUp')}}">
                       <span class="login"> Login </span>
                        </a>
                       </li>
                        </div>
                    @endif

                </div>
            </div>
        </nav>
    </div>
</div>

