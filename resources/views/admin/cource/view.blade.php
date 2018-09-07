@extends('admin.layout.app')

@section('head-section')
<link rel="stylesheet" href="{{asset('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" />
@endsection

@section('main-content')
	<div class="content-wrapper">
  @include('message.message')
          <h1 class="page-title">Cource table</h1>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Serial</th>
                          <th>Cource Name</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($cources as $cource) 
                      <tr>
                          <td>{{$loop->index + 1}}</td>
                          <td>{{$cource->courcename}}</td>
                          <td><a href="{{route('cource.edit',$cource->id)}}" class="btn btn-outline-primary">Edit</a></td>
                          <td> <form action="{{route('cource.destroy',$cource->id)}}" method="post" id="delete-form-{{ $cource->id}}">
                              @csrf
                              {{method_field('DELETE')}}
                            </form>
                            <a href="" onclick="if(confirm('Are You Sure To Delete?')){
                              event.preventDefault();
                              getElementById('delete-form-{{ $cource->id}}').submit();
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