@extends('layouts.master')

@section('page-title')
  Detail Data
@endsection

@section('content')
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">{{ $questions->title }}</h3>
      </div>
      <div class="card-body">
        <h5>{{ $questions->body }}</h5>
      </div>
    </div>
  </div>
@endsection