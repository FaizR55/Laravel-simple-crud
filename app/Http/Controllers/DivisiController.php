<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DivisiController extends Controller
{
    public function add(){
        return view('add_divisi');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
        ]);
        // insert data ke table pegawai
        DB::table('divisi')->insert([
            'nama_divisi' => $request->nama,
        ]);
        Session::flash('flash_message', 'Divisi baru berhasil ditambahkan!');
        // alihkan halaman ke halaman pegawai
        return redirect('/');
    }
}
