@extends('layout.template')
@section('title', 'Tambah Karyawan')

@section('content')

 <!-- general form elements -->
 <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Input Karyawan baru</h3>
    </div>
    <!-- /.card-header -->

    {{--dd($data)--}}

    <!-- form start -->
    <form action="/karyawan/store" method="POST">
    @csrf
      <div class="card-body">
        <div class="form-group">
          <label>Nama karyawan</label>
          <input type="text" class="form-control" name="nama" placeholder="nama">
        </div>
        <div class="form-group">
          <label>Jenis Kelamin</label>
          <input type="text" class="form-control" name="jk" placeholder="l/p">
        </div>

        <div class="form-group">
            <select name="division_id" class="form-control">
                <option value="">== SELECT DIVISI ==</option>
                @foreach ($data as $id)
                    <option value="{{ $id->id }}">{{ $id->nama_divisi }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <select name="perusahaan_id" class="form-control">
                <option value="">== SELECT PERUSAHAAN ==</option>
                @foreach ($data2 as $id)
                    <option value="{{ $id->id }}">{{ $id->nama_perusahaan }}</option>
                @endforeach
            </select>
        </div>
      </div>

      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <!-- /.card -->

@endsection
