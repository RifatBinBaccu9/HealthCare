<header id="header" class="header d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        {{-- <a href="index.html" class="logo d-flex align-items-center"> --}}
            <i class="fa-solid fa-hospital" style="color: red; font-size:30px; margin:20px;"></i>
            <span style="font-size: 30px; font-weight: 700; color: #fff;" class="d-none d-lg-block">HEALTH CARE</span>
        
    </div><!-- End Logo -->
  
    <nav class="header-nav " style="margin-left: 80px">
        <ul class="nabver d-flex align-items-center">
  
          <li class="nav-item marg">
            <a href="{{ url('/') }}" class="nav-link active">Home</a>
        </li>
        <li class="nav-item marg">
            <a href="{{ url('/about') }}" class="nav-link">About</a>
        </li>
        <li class="nav-item marg">
            <a href="{{ url('/service') }}" class="nav-link">Service</a>
        </li>

        <li class="nav-item dropdown marg">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
            <ul class="dropdown-menu m-0">
                <li><a href="{{ url('/doctorTeam') }}" class="dropdown-item">The Team</a></li>
                <li><a href="{{ url('/testimonial') }}" class="dropdown-item">Testimonial</a></li>
                <li><a href="{{ url('/appointment') }}" class="dropdown-item">Appointment</a></li>
            </ul>
        </li>
        <li class="nav-item marg">
            <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
        </li>

        @if (Auth::user())
           @if (Auth::user()->is_tyep == 'admin')
           <li class="nav-item marg">
            <a href="{{url('/admin')}}" class="nav-link">ADashboard</a>
            </li>
            @else
            <li class="nav-item marg">
                <a href="{{url('/user')}}" class="nav-link">UDashboard</a>
                </li>
            @endif
        <li class="nav-item dropdown pe-3 marg">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="{{asset($user->profilePicture)}}" alt="Profile" class="rounded-circle" style="height: 50px; width: 50px;">
                <span class="d-none d-md-block dropdown-toggle ps-2">{{$user->FullName}}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header" style="text-align: center">
                    <h6>{{$user->FullName}}</h6>
                    <span>{{$user->email}}</span>
                </li>
                <li><hr class="dropdown-divider"></li>
                @if (Auth::user()->is_tyep == 'admin')
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{route('adminProfile')}}">
                        <i class="bi bi-person" style="margin-left: 15px;"></i>
                        <span>My Profile</span>
                    </a>
                </li>
                @else
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{route('userProfile')}}">
                        <i class="bi bi-person" style="margin-left: 15px;"></i>
                        <span>My Profile</span>
                    </a>
                </li>
                @endif
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
  