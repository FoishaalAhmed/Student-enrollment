@extends('admin.layout.app')
@section('main-content')

<div class="content-wrapper">  <h1 class="page-title">Edit Cource</h1>
  <div class="row">
      <div class="col-12 col-lg-12 grid-margin">
          <div class="card">
              <div class="card-body">
                  <form class="forms-sample" action="{{route('cource.update',$cource->id)}}" method="post">
                   @csrf
                   {{method_field('PUT')}}
                      <div class="form-group">
                          <label for="exampleInputEmail1">Cource Name</label>
                          <input type="text" class="form-control p-input" name ="courcename" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$cource->courcename}}">
                      </div>
                      <button type="submit" class="btn btn-success">Submit</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection