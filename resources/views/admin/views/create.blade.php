@extends('admin.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Ekstrakurikuler Baru</h1>
    </div>
    <div class="col-lg-8">
        <form method="POST" action="/admin/views" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">nama</label>
                <input type="text" id="nama" name="nama"
                    class="form-control @error('nama') is-invalid @enderror">
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Logo</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="satu" class="form-label">Foto1</label>
                <input class="form-control" type="file" id="satu" name="satu">
            </div>
            <div class="mb-3">
                <label for="dua" class="form-label">Foto2</label>
                <input class="form-control" type="file" id="dua" name="dua">
            </div>
            <div class="mb-3">
                <label for="tiga" class="form-label">Foto3</label>
                <input class="form-control" type="file" id="tiga" name="tiga">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="hidden" id="deskripsi" name="deskripsi">
                <trix-editor input="deskripsi"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary w-100">Unggah Ekstrakulikuler</button>
        </form>
    </div>
@endsection
