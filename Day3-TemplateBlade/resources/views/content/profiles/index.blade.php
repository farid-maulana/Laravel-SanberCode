@extends('layouts.master')

@section('page-title')
    List Profile
@endsection

@section('content')
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Profile</h3>
        <a href="/profile/create" class="btn btn-primary float-right">Create New Profile</a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
          @if (session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
          @endif
        <table class="table table-bordered">
          <thead>                  
            <tr>
              <th style="width: 10px">#</th>
              <th>Full Name</th>
              <th>Email</th>
              <th style="width: 50px">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($profile as $key => $data)
              <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $data->full_name }}</td>
                <td>{{ $data->email }}</td>
                <td class="d-flex">
                    <a href="/profile/{{ $data->id }}" class="btn btn-info btn-sm" title="Show Detail"><i class="fas fa-eye"></i></a>
                    <a href="/profile/{{ $data->id }}/edit" class="btn btn-primary btn-sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                    <form action="/profile/{{ $data->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm" type="submit" title="Delete Data">
                        <i class="fas fa-trash"></i>
                      </button>
                    </form>
                </td>
              </tr>
              @empty
                  <tr>
                      <td colspan="4" align="center">No data</td>
                  </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@endsection