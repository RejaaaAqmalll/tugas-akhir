<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakulikuler;
use Illuminate\Http\Request;

class EkskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.views.ekskul', [
            'ekskuls' => Ekstrakulikuler::all()
        ]); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.views.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $validatedData = $request->validate([
            'nama'=> 'required|max:255',
            'slug'=> 'required|unique:ekstrakulikulers',
            'deskripsi'=> 'required',
            'image'=> 'image|file',
            'satu'=> 'image|file',
            'dua'=> 'image|file',
            'tiga'=> 'image|file'
        ]);
        
        $validatedData['image'] = $request->file('image')->store('post-images');
        $validatedData['satu'] = $request->file('image')->store('post-images');
        $validatedData['dua'] = $request->file('image')->store('post-images');
        $validatedData['tiga'] = $request->file('image')->store('post-images');
        
        Ekstrakulikuler::create($validatedData);

        return redirect('/admin/views');
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Ekstrakulikuler $ekskul
     * @return \Illuminate\Http\Response
     */
    public function show(Ekstrakulikuler $ekskul)
    {
        return $ekskul;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ekstrakulikuler $ekskul)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ekstrakulikuler $ekskul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ekstrakulikuler  $ekskul
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ekstrakulikuler $ekskul)
    {
        Ekstrakulikuler::destroy($ekskul->id);
        
        return redirect('/admin/views')->with('success', 'Ekstrakurikuler Berhasil Dihapus');
    }
}
