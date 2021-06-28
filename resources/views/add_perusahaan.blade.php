@extends('layout.template')
@section('title', 'Tambah Perusahaan')

@section('content')

 <!-- general form elements -->
 <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Input Perusahaan baru</h3>
    </div>
    <!-- /.card-header -->
    {{--dd($data)--}}
    <!-- form start -->
    <form action="/perusahaan/store" method="POST">
    @csrf
      <div class="card-body">
        <div class="form-group">
          <label>Nama Perusahaan</label>
          <input type="text" class="form-control" name="nama" placeholder="nama">
        </div>

      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <!-- /.card -->

@endsection
