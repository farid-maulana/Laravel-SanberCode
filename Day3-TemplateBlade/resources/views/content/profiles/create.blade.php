@extends('layouts.master')

@section('page-title')
  Create Profile
@endsection

@section('content')
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary ">
      <div class="card-header">
          <h3 class="card-title">Profile</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="/profile" method="POST">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="full_name">Full Name</label>
            <input type="text" class="form-control @error('full_name') is-invalid @enderror" id="full_name" name="full_name" value="{{ old('full_name') }}" placeholder="Enter Full Name">
            @error('full_name')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter Email">
            @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
@endsection
