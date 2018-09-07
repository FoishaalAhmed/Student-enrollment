@extends('admin.layout.app')

@section('main-content')
	<div class="content-wrapper">
          <h1 class="page-title">User Profile</h1>
          <div class="row user-profile">
            <div class="col-lg-4 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="/uploaded_files/student-img/{{Sentinel::getUser()->image}}" alt="">
                  <p class="name">{{Sentinel::getUser()->name}}</p>
                  <p class="designation">-  {{Sentinel::getUser()->username}}  -</p>
                  <a class="email" href="#">{{Sentinel::getUser()->email}}</a>
                  <a class="number" href="#">{{Sentinel::getUser()->department}}</a>
                </div>
              </div>
            </div>
            <div class="col-lg-8 side-right">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-block d-sm-flex align-items-center justify-content-between">
                    <h2 class="card-title">Details</h2>
                  </div>
                  <div class="wrapper">
                    <hr>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                        <form action="{{route('profile.update',Sentinel::getUser()->id)}}" method="post">
                          @csrf
                         {{ method_field('PUT')}}
                          <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{Sentinel::getUser()->name}}">
                          </div>
                          <div class="form-group">
                            <label for="designation">Designation</label>
                            <input type="text" class="form-control" id="designation" name="username" value="{{Sentinel::getUser()->username}}">
                          </div>
                          <div class="form-group">
                            <label for="mobile">Mobile Number</label>
                            <input type="text" class="form-control" id="mobile" name="department" value="{{Sentinel::getUser()->department}}">
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{Sentinel::getUser()->email}}">
                          </div>
                          <div class="form-group mt-5">
                            <button type="submit" class="btn btn-success mr-2">Update</button>
                             <a href="{{route('password.index')}}" class="btn btn-outline-primary">Update Password</a>
                          </div>
                        </form>
                      </div><!-- tab content ends -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection