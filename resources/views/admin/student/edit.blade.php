@extends('admin.layout.app')
@section('main-content')

<div class="content-wrapper">
  @include('message.message')
  <h1 class="page-title">Edit Students</h1>
  <div class="row">
      <div class="col-12 col-lg-12 grid-margin">
          <div class="card">
              <div class="card-body">
                  <form class="forms-sample" action="{{route('student.update',$students->id)}}" method="post" enctype="multipart/form-data">
                   @csrf
                   {{method_field('PUT')}}
                      <div class="form-group">
                          <label for="exampleInputEmail1">User Name</label>
                          <input type="text" class="form-control p-input" name ="username" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$students->username}}">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text" class="form-control p-input" name ="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$students->name}}">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control p-input" name ="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$students->email}}">
                      </div>
                      <div class="form-group">
                          <label>Upload Image</label>
                          <div class="row">
                            <div class="col-12">
                              <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                              <input type="file" class="form-control-file" name = "image" id="exampleInputFile2" aria-describedby="fileHelp">
                            </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Department</label>
                          <select name="department" id="" class="form-control">
                            @foreach ($cources as $cource)
                            <option value="{{$cource->id}}">{{$cource->courcename}}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="value" value="1" checked>
                            User Value
                          </label>
                      </div>
                      <button type="submit" class="btn btn-success">Submit</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection