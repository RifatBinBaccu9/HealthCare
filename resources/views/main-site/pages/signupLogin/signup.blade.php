@extends('main-site')
@section('main-site')

<!-- Registration 9 - Bootstrap Brain Component -->
<section class="bg-primary py-3 py-md-5 py-xl-8">
    <div class="container">
      <div class="row gy-4 align-items-center ">
        <div class="col-12 col-md-6 col-xl-7 " >
          <div class="d-flex justify-content-center text-bg-primary">
            <div class="col-12 col-xl-9">
              <img style="border-radius: 20px" class="img-fluid  mb-4" loading="lazy" src="main-site/img/medinova.png" width="245" height="80" alt="BootstrapBrain Logo">
              <hr class="border-primary-subtle mb-4">
              <h2 class="h1 mb-4">Best Medical Care For Yourself and Your Family</h2>
              <p class="lead mb-5">We are your partner for health, helping your live well by bringing the best in healthcare to your door.</p>
              <div class="text-endx">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-grip-horizontal" viewBox="0 0 16 16">
                  <path d="M2 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-5">
          <div class="card border-0 rounded-4">
            <div class="card-body p-3 p-md-4 p-xl-5">
              <div class="row">
                <div class="col-12">
                  <div class="mb-4">
                    <h2 class="h3">Create Account</h2>
                    <h3 class="fs-6 fw-normal text-secondary m-0">Get started with your free account</h3>
                  </div>
                </div>
              </div>
              <form action="{{route('signup-Data')}}" method="POST">
                @csrf
                <div class="row gy-3 overflow-hidden">
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control @error('FullName') is-invalid @enderror" name="FullName" id="FullName" placeholder="Full Name">
                      <label for="FullName" class="form-label">Full Name</label>
                      @error('FullName')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com">
                      <label for="email" class="form-label">Email</label>
                      @error('email')
                       <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="" placeholder="Password">
                      <label for="password" class="form-label">Password</label>
                      @error('password')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" value="" placeholder="Password">
                      <label for="password_confirmation" class="form-label">Confirmation password</label>
                      @error('password_confirmation')
                       <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input @error('iAgree') is-invalid @enderror" type="checkbox" value="1" name="iAgree" id="iAgree">
                      <label class="form-check-label text-secondary" for="iAgree">
                        I agree to the <a href="#!" class="link-primary text-decoration-none">terms and conditions</a>
                      </label>
                      @error('iAgree')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button class="btn btn-primary btn-lg" type="submit">Sign up</button>
                    </div>
                  </div>
                </div>
              </form>
              <div class="row">
                <div class="col-12">
                  <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center mt-4">
                    <p class="m-0 text-secondary text-center">Already have an account? <a href="{{route('logIn')}}" class="link-primary text-decoration-none">Sign in</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection