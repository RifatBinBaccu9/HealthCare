@extends('admin-site')
@section('admin-site')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Doctor List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('doctorTeamDataList') }}" style="color: rgb(214, 11, 221);">Doctor List</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="padding-top: 20px;">
                    <div class="card-body">

                        <!-- Scrollable Table Container -->
                        <div style="max-height: 400px; max-width:1000px; overflow: auto;">
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Service Image</th>
                                        <th>Doctor Name</th>
                                        <th>Professional Expert</th>
                                        <th>Twitter Link</th>
                                        <th>Facebook Link</th>
                                        <th>LinkedIn Link</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($doctorStor as $DoctorDataView)
                                    <tr>
                                        <td>
                                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#">
                                                <img src="{{ asset($DoctorDataView->image) }}" alt="Profile" class="rounded-circle" style="width: 50px; height: 50px;">
                                            </a>
                                        </td>
                                        <td>{{ $DoctorDataView->doctorName }}</td>
                                        <td>{{ $DoctorDataView->ProfessionalExpart }}</td>
                                        <td><a href="{{ $DoctorDataView->tuitarLink }}" target="_blank">Twitter</a></td>
                                        <td><a href="{{ $DoctorDataView->FacbookLink }}" target="_blank">Facebook</a></td>
                                        <td><a href="{{ $DoctorDataView->linkedinLink }}" target="_blank">LinkedIn</a></td>
                                        <td>{{ $DoctorDataView->description }}</td>
                                        <td>
                                            {{-- Update and Delete links can be added here --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                        <!-- End Scrollable Table Container -->

                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection
