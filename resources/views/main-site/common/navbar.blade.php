<header id="header" class="header d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        {{-- <a href="index.html" class="logo d-flex align-items-center"> --}}
            <i class="fa-solid fa-hospital" style="color: red; font-size:30px; margin:20px;"></i>
            <span style="font-size: 30px; font-weight: 700; color: #fff;" class="d-none d-lg-block">HEALTH CARE</span>
        
    </div><!-- End Logo -->
  
    <nav class="header-nav " style="margin-left: 80px">
        <ul class="nabver d-flex align-items-center">
  
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link active">Home</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/about') }}" class="nav-link">About</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/service') }}" class="nav-link">Service</a>
        </li>

        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
            <ul class="dropdown-menu m-0">
                <li><a href="{{ url('/OurCliend') }}" class="dropdown-item">Our Client</a></li>
                <li><a href="{{ url('/doctorTeam') }}" class="dropdown-item">The Team</a></li>
                <li><a href="{{ url('/testimonial') }}" class="dropdown-item">Testimonial</a></li>
                <li><a href="{{ url('/appointment') }}" class="dropdown-item">Appointment</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
        </li>

        @if (Auth::user())
           @if (Auth::user()->is_tyep == 'admin')
           <li class="nav-item">
            <a href="{{url('/admin')}}" class="nav-link">ADashboard</a>
            </li>
            @else
            <li class="nav-item">
                <a href="{{url('/user')}}" class="nav-link">UDashboard</a>
                </li>
            @endif
        <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="admin-site/img/profile-img.jpg" alt="Profile" class="rounded-circle" style="height: 40px">
                <span class="d-none d-md-block dropdown-toggle ps-2">ghkmzwruaqkopng</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                    <h6>Kevin Anderson</h6>
                    <span>Web Designer</span>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{ url('/userProfile') }}">
                        <i class="bi bi-person"></i>
                        <span>My Profile</span>
                    </a>
                </li>
                <li><hr class="dropdown-divider"></li>
    
                <li class="nav-item">
                    <a class="nav-link" style="color: #000;" href="{{ url('/logOut') }}">
                            <i class="bi bi-box-arrow-right"></i> Log Out
                    </a>
                </li>
            
            </ul>
        </li><!-- End Profile Nav -->

        @else
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/signUp') }}">
                    <i class="fa fa-user" aria-hidden="true"></i> Sign Up
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/logIn') }}">
                <i class="fa fa-user" aria-hidden="true"></i> Log In
                </a>
            </li>
        @endif
  
        </ul>
    </nav><!-- End Icons Navigation -->
    </div>
  </header>
  