@extends('admin.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kelola Ekstrakulikuler</h1>
</div>

<div class="table-responsive col-lg-8">
  <a href="/admin/views/create" class="btn btn-primary mb-3">Tambahkan Ekstrakulikuler</a>
    <table class="table table-striped table-sm">
      <thead>
        
          <th scope="col">Nomor</th>
          <th scope="col">Judul</th>
          <th scope="col">Slug</th>
          <th scope="col" rowspan="3">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($ekskuls as $ekskul)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $ekskul->nama }}</td>
          <td>{{ $ekskul->slug }}</td>
          <td>
            <a href="/admin/views/{{ $ekskul->slug }}" class="badge bg-info"><i class="uil uil-eye"></i></a>
            <a href="/admin/views/{{ $ekskul->slug }}/edit" class="badge bg-warning"><i class="uil uil-edit-alt"></i></a>
            <form action="/admin/views/{{ $ekskul->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Esktrakurikuler Ini?')"><i class="uil uil-trash"></i></button>
            </form>
          </td>
        </tr>
            
        @endforeach

      </tbody>
    </table>
  </div>

@endsection