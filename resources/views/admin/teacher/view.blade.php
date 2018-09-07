@extends('admin.layout.app')

@section('head-section')
<link rel="stylesheet" href="{{asset('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" />
@endsection

@section('main-content')
	<div class="content-wrapper">
  @include('message.message')
          <h1 class="page-title">Teacher table</h1>
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
                          <th>Phone</th>
                          <th>Image</th>
                          <th>Department</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($teachers as $teacher)
                      <tr>
                          <td>{{$loop->index + 1}}</td>
                          <td>{{$teacher->name}}</td>
                          <td>{{$teacher->email}}</td>
                          <td>{{$teacher->phone}}</td>
                          <td><img src="/uploaded_files/teacher-img/{{$teacher->image}}" alt="" width="50px" height="50px"></td>
                          <td>
                            @if ($teacher->department == 1)
                            {{'CSE'}}
                            @elseif($teacher->department == 2)
                            {{'CS'}}
                            @elseif($teacher->department == 3)
                            {{'EEE'}}
                            @elseif($teacher->department == 4)
                            {{'BBA'}}
                            @endif
                          </td>
                          <td><a href="{{route('teacher.edit',$teacher->id)}}" class="btn btn-outline-primary">Edit</a></td>
                          <td> <form action="{{route('teacher.destroy',$teacher->id)}}" method="post" id="delete-form-{{ $teacher->id}}">
                              @csrf
                              {{method_field('DELETE')}}
                            </form>
                            <a href="" onclick="if(confirm('Are You Sure To Delete?')){
                              event.preventDefault();
                              getElementById('delete-form-{{ $teacher->id}}').submit();
                            }else{
                                event.preventDefault();
                              }" class="btn btn-outline-primary">Delete</a>
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