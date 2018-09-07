@extends('admin.layout.app')
@section('main-content')

<div class="content-wrapper">
  @include('message.message')
  <h1 class="page-title">Add Students</h1>
  <div class="row">
      <div class="col-12 col-lg-12 grid-margin">
          <div class="card">
              <div class="card-body">
                  <form class="forms-sample" action="{{route('student.store')}}" method="post">
                   @csrf
                      <div class="form-group">
                          <label for="exampleInputEmail1">User Name</label>
                          <input type="text" class="form-control p-input" name ="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" required="">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text" class="form-control p-input" name ="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required="">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control p-input" name ="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control p-input" name ="password" id="exampleInputPassword1" placeholder="Password" required="">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Confirm Password</label>
                          <input type="password" class="form-control p-input" name ="password_confirmation" id="exampleInputPassword1" placeholder="Confirm Password" required="">
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