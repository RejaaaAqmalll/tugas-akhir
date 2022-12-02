@extends('admin.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kelola User</h1>
</div>

<div class="table-responsive col-lg-8">
    {{-- <a href="/admin/views/create" class="btn btn-primary mb-3">Tambahkan Ekstrakulikuler</a> --}}
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">Nomor</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col" rowspan="3">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->email }}</td>
            <td>
              <a href="/admin/views/{{ $user->nama }}" class="badge bg-info"><i class="uil uil-eye"></i></a>
              <a href="/admin/views/{{ $user->nama }}/edit" class="badge bg-warning"><i class="uil uil-edit-alt"></i></a>
              <form action="/admin/views/{{ $user->nama }}" method="post" class="d-inline">
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