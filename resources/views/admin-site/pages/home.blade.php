@extends('admin-site')
@section('admin-site')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{route('serviceTable')}}" style="color: rgb(214, 11, 221);">Dashboard</a></li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->
  </main>
@endsection