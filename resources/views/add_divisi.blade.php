@extends('layout.template')
@section('title', 'Tambah Divisi')

@section('content')

 <!-- general form elements -->
 <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Input Divisi baru</h3>
    </div>
    <!-- /.card-header -->
    {{--dd($data)--}}
    <!-- form start -->
    <form action="/divisi/store" method="POST">
    @csrf
      <div class="card-body">
        <div class="form-group">
          <label>Nama Divisi</label>
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
