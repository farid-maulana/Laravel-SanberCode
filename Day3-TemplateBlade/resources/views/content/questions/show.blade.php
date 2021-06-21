@extends('layouts.master')

@section('page-title')
  Detail Questions
@endsection

@section('content')
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-question-circle"></i>
          {{ $questions->title }}
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <dl class="row">
          <dt class="col-sm-4">Title</dt>
          <dd class="col-sm-8">{{ $questions->title }}</dd>
          <dt class="col-sm-4">Body</dt>
          <dd class="col-sm-8">{{ $questions->body }}</dd>
          <dt class="col-sm-4">Profile ID</dt>
          <dd class="col-sm-8">{{ $questions->profiles_id }}</dd>
          <dt class="col-sm-4">Tanggal Posting</dt>
          <dd class="col-sm-8">{{ $questions->created_at }}</dd>
          <dt class="col-sm-4">Tanggal Update</dt>
          <dd class="col-sm-8">{{ $questions->updated_at }}</dd>
        </dl>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- ./col -->
@endsection