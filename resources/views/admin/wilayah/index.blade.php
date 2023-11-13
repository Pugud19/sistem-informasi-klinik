@extends('admin.index')

@section('content')
<div class="col-md-10 grid-margin stretch-card">
    <div class="card">
      <div class="card-body my-3">
        <div class="d-flex justify-content-between">
        <p class="card-title mb-0">Daftar Paket Internet</p>
        <div>
            <a href="{{ route('wilayah.create')}}" class="btn btn-primary mr-2"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        </div>

        <div class="table-responsive">
          <table class="table table-striped table-borderless text-center">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Wilayah</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($wilayah as $w)
              <tr>
                <td>{{ ++$no }}</td>
                <td class="font-weight-bold">{{ $w->nama_wilayah }}</td>
                <td>
                    <span class="d-flex justify-content-center">
                        <a href="{{ route('wilayah.edit', $w->id)}}" class="btn btn-sm btn-warning mx-1" title="Ubah data"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                        <a href="/wilayah-delete/{{$w->id}}" class="btn btn-sm btn-danger delete-confirm" title="Hapus data"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a>
                    </span>
                </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        {{-- <div class="py-5">{{ $wilayah->links() }}</div> --}}
    </div>
    </div>
  </div>
@endsection
