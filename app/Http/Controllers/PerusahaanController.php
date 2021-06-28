<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PerusahaanController extends Controller
{
    public function add(){
        return view('add_perusahaan');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
        ]);
        // insert data ke table pegawai
        DB::table('perusahaan')->insert([
            'nama_perusahaan' => $request->nama,
        ]);
        Session::flash('flash_message', 'Perusahaan baru berhasil ditambahkan!');
        // alihkan halaman ke halaman pegawai
        return redirect('/');
    }
}
