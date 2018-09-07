@extends('admin.layout.app')
@section('main-content')

<div class="content-wrapper">
  @include('message.message')
  <h1 class="page-title">Add Teachers</h1>
  <div class="row">
      <div class="col-12 col-lg-12 grid-margin">
          <div class="card">
              <div class="card-body">
                  <form class="forms-sample" action="{{route('teacher.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text" class="form-control p-input" name ="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control p-input" name ="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Phone</label>
                          <input type="text" class="form-control p-input" name ="phone" id="exampleInputPassword1" placeholder="Phone">
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
                          <select name="courcename" id="" class="form-control">
                            @foreach ($cources as $cource)
                            <option value="{{$cource->id}}">{{$cource->courcename}}</option>
                            @endforeach
                          </select>
                      </div>
                      <button type="submit" class="btn btn-success">Submit</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection