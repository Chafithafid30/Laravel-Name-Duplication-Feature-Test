<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NamaLengkap;

class NamaLengkapController extends Controller
{
    public function create()
    {
        return view('create-nama-lengkap');
    }

    public function store(Request $request)
    {
        $namaLengkap = new NamaLengkap();
        $namaLengkap->nama_lengkap = $request->input('nama_lengkap');

        $result = $namaLengkap->checkNamaLengkap($request->input('nama_lengkap'));

        if ($result) {
            return redirect()->back()->with('error', 'Data sudah tersedia. Pengisian tidak dapat dilanjutkan.');
        } else {
            $namaLengkap->save();
            return redirect()->route('create.nama-lengkap')->with('success', 'Data berhasil disimpan.');
        }
    }

    public function showData()
    {
        $namaLengkap = NamaLengkap::all();
        return view('create-nama-lengkap', compact('namaLengkap'));
    }
}
