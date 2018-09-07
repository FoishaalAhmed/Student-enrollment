@extends('admin.layout.app')

@section('main-content')
  <div class="content-wrapper">
          <h1 class="page-title">User Profile</h1>
          <div class="row user-profile">
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
                        <form action="{{route('password.update',Sentinel::getUser()->id)}}" method="post">
                          @csrf
                         {{ method_field('PUT')}}
                          <div class="form-group">
                            <label for="name">New Password</label>
                            <input type="text" class="form-control" id="name" name="password">
                          </div>
                          <div class="form-group">
                            <label for="designation">Confirm Password</label>
                            <input type="text" class="form-control" id="designation" name="password_confirmation">
                          </div>
                          <div class="form-group mt-5">
                            <button type="submit" class="btn btn-success mr-2">Update</button>
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