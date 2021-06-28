@extends('layout.template')
@section('title', 'Edit Karyawan')

@section('content')

 <!-- general form elements -->
 <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit Karyawan</h3>
    </div>
    <!-- /.card-header -->

    @if ($errors->any())
    <div class="alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    @foreach ($karyawan as $k)
    <!-- form start -->
    <form action="/karyawan/update" method="POST">
    @csrf
      <div class="card-body">
        <input type="hidden" name="id" value="{{ $k->id }}">
        <div class="form-group">
          <label>Nama karyawan</label>
          <input type="text" class="form-control" name="nama" value="{{$k->name}}">
        </div>
        <div class="form-group">
          <label>Jenis Kelamin</label>
          <input type="text" class="form-control" name="jk" value="{{$k->jk}}">
        </div>
        <div class="form-group">
          <label>ID Divisi</label>
          <input type="text" class="form-control" name="division_id" value="{{$k->division_id}}">
        </div>
        <div class="form-group">
          <label>ID Perusahaan</label>
          <input type="text" class="form-control" name="perusahaan_id" value="{{$k->perusahaan_id}}">
        </div>
      </div>
      @endforeach
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <!-- /.card -->

@endsection
