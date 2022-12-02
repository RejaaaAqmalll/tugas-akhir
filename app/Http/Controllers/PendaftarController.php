<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;

class PendaftarController extends Controller
{
    public function index()
    {
        return view('user.views.daftar');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'kelas' => 'required',
            'jurusan' => 'required|min:2|max:255',
            'alasan_masuk' => 'required'
        ]);

        Pendaftar::create($validatedData);

        session()->flash('Berhasil', 'Pendaftaran Ekskul berhasil');

        return redirect('/tentang');
        
    }

}