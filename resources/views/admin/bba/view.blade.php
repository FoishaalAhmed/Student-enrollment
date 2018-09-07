@extends('admin.layout.app')

@section('head-section')
<link rel="stylesheet" href="{{asset('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" />
@endsection

@section('main-content')
  <div class="content-wrapper">
    @include('message.message')
          <h1 class="page-title">Student table</h1>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Serial</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Image</th>
                          <th>Department</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($students as $student) 
                      <tr>
                          <td>{{$loop->index + 1}}</td>
                          <td>{{$student->name}}</td>
                          <td>{{$student->email}}</td>
                          <td><img src="/uploaded_files/student-img/{{$student->image}}" alt="Image" width="50px" height="50px"></td>
                          <td>
                            @if ($student->department == 1)
                            {{'CSE'}}
                            @elseif($student->department == 2)
                            {{'CS'}}
                            @elseif($student->department == 3)
                            {{'EEE'}}
                            @elseif($student->department == 4)
                            {{'BBA'}}
                            @endif
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('footer-section')
  <script src="{{asset('node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('js/data-table.js')}}"></script>
@endsection