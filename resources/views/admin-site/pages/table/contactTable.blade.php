@extends('admin-site')
@section('admin-site')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Contact Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{route('adminHome')}}">Admin Dashboard Tables</a></li>
          <li class="breadcrumb-item active"><a href="{{route('contactTable')}}" style="color: rgb(214, 11, 221);">Contact Table</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Contact Tables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library.</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>N</b>ame
                    </th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Message</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($contactDataStor as $contactDataView)
                  <tr>
                    <td>{{$contactDataView->name}}</td>
                    <td>{{$contactDataView->email}}</td>
                    <td>{{$contactDataView->phone}}</td>
                    <td>{{$contactDataView->Subject}}</td>
                    <td>{{$contactDataView->message}}</td>
                  </tr>
                  @endforeach
                 </tbody>               


              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  @endsection