<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class KaryawanController extends Controller
{

    public function index(){

        $data2="test";

        //mengambil data darri database menggunakan db::table() dan disimpan ke dalam $data
        //menggunakan ->join() untuk menggabungkan tabel lainnya
        //diakhir get() untuk mengambil data array

        //diakhir first() jika hanya satu data yang diambil

        $data = DB::table('karyawan')
                ->join('divisi', 'divisi.id', '=', 'karyawan.division_id')
                ->join('perusahaan', 'perusahaan.id', '=', 'karyawan.division_id')
                ->select('karyawan.*', 'divisi.id as d_id', 'divisi.nama_divisi',
                        'perusahaan.id as p_id', 'perusahaan.nama_perusahaan')
                ->get();

        //tampilkan view barang dan kirim datanya ke view tersebut
        return view('index')->with(compact('data', 'data2'));
    }

    public function add(){

        $data = DB::table('divisi')
                ->get();
        $data2 = DB::table('perusahaan')
                ->get();

        return view('add_karyawan')->with(compact('data', 'data2'));
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jk' => 'required',
            'division_id' => 'required',
            'perusahaan_id' => 'required'
        ]);
        // insert data ke table pegawai
        DB::table('karyawan')->insert([
            'name' => $request->nama,
            'jk' => $request->jk,
            'division_id' => $request->division_id,
            'perusahaan_id' => $request->perusahaan_id
        ]);
        Session::flash('flash_message', 'Data berhasil ditambahkan!');
        // alihkan halaman ke halaman pegawai
        return redirect('/');
    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $karyawan = DB::table('karyawan')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit_karyawan',['karyawan' => $karyawan]);
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('karyawan')->where('id',$request->id)->update([
            'name' => $request->nama,
            'jk' => $request->jk,
            'division_id' => $request->division_id,
            'perusahaan_id' => $request->perusahaan_id
        ]);
        Session::flash('flash_message', 'Data berhasil diedit!');
        // alihkan halaman ke halaman pegawai
        return redirect('/');
    }

    // method untuk hapus data pegawai
    public function delete($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('karyawan')->where('id',$id)->delete();
        Session::flash('flash_message', 'Data berhasil dihapus!');
        // alihkan halaman ke halaman pegawai
        return redirect('/');
    }
}
