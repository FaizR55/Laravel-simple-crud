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

    {{-- {{ dd(get_defined_vars()) }} --}}

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
            <select name="division_id" class="form-control">
                <option value="{{$k->division_id}}">{{ $k->nama_divisi }}</option>
                @foreach ($data as $id)
                    <option value="{{ $id->id }}">{{ $id->nama_divisi }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <select name="perusahaan_id" class="form-control">
                <option value="{{$k->perusahaan_id}}">{{ $k->nama_perusahaan }}</option>
                @foreach ($data2 as $id)
                    <option value="{{ $id->id }}">{{ $id->nama_perusahaan }}</option>
                @endforeach
            </select>
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
