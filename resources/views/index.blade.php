@extends('layout.template')

@section('title', 'Index')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Karyawan</h3>
        </div>

        @if(Session::has('flash_message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('flash_message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif

        <!-- /.card-header -->
        {{-- {{dd($data)}} --}}
        <div class="card-body">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>ID</th>
              <th>Nama Karyawan</th>
              <th>Jenis Kelamin</th>
              <th>Nama Divisi</th>
              <th>Nama Perusahaan</th>
              <th scope="col">&nbsp;</th>
              <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($data as $d)
            <tr>
              <td>{{$d->id}}</td>
              <td>{{$d->name}}</td>
              <td>{{@strtoupper($d->jk)}}</td>
              <td>{{$d->nama_divisi}}</td>
              <td>{{$d->nama_perusahaan}}</td>
              <td>
                <a href="/karyawan/edit/{{ $d->id }}" class="tm-product-delete-link">
                  <i class="far fa-edit tm-product-img-edit"></i>
                </a>
              </td>
              <td>
                <a href="/karyawan/delete/{{ $d->id }}" class="tm-product-delete-link"
                onclick="return confirm('apakah anda yakin data ber id={{$d->id}} ingin dihapus ?') ">
                  <i class="far fa-trash-alt tm-product-delete-icon"></i>
                </a>
              </td>
            </tr>
            @endforeach
            </tbody>
            <tfoot>
          </table>
            <div class="d-flex justify-content-center" style="padding-top:10px;">
            <a href="/karyawan/add" class="btn btn-primary btn-block text-uppercase mb-3">Input Karyawan Baru</a>
            </div>
            <div class="d-flex justify-content-center" style="padding-top:10px;">
            <a href="/divisi/add" class="btn btn-primary btn-block text-uppercase mb-3">Input Divisi Baru</a>
            </div>
            <div class="d-flex justify-content-center" style="padding-top:10px;">
            <a href="/perusahaan/add" class="btn btn-primary btn-block text-uppercase mb-3">Input Perusahaan Baru</a>
            </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
@endsection

@section('scripts')
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection
