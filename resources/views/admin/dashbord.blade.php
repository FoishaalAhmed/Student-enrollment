@extends('admin.layout.app')
@section('main-content')
  <!-- partial -->
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-6 col-md-3 grid-margin">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">All Student</h2>
            <p style="text-align: center; font-weight: bold; font-size: 25px">{{$students}}</p>
          </div>
          <div class="dashboard-chart-card-container">
            <div id="dashboard-card-chart-1" class="card-float-chart"></div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 grid-margin">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">All Teacher</h2>
            <p style="text-align: center; font-weight: bold; font-size: 25px">{{$teachers}}</p>
          </div>
          <div class="dashboard-chart-card-container">
            <div id="dashboard-card-chart-2" class="card-float-chart"></div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 grid-margin">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Tution Fee</h2>
            <p style=" font-weight: bold; font-size: 20px; margin-top: 5px">Semister: 12000 TK</p>
          </div>
          <div class="dashboard-chart-card-container">
            <div id="dashboard-card-chart-3" class="card-float-chart"></div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 grid-margin">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Revenue</h2>
            <p style="text-align: center; font-weight: bold; font-size: 25px">Revenue</p>
          </div>
          <div class="dashboard-chart-card-container">
            <div id="dashboard-card-chart-4" class="card-float-chart"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->

  @endsection
