@extends('admin.index')

@section('content')
<div class="col-md-10 grid-margin stretch-card">
    <div class="card">
      <div class="card-body my-3">
        <div class="d-flex justify-content-between">
        <p class="card-title mb-0">Daftar Paket Internet</p>
        <div>
            <a href="{{ route('tindakan.create')}}" class="btn btn-primary mr-2"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        </div>

        <div class="table-responsive">
          <table class="table table-striped table-borderless text-center">
            <thead>
              <tr>
                <th>No</th>
                <th>user_id</th>
                <th>Deskripsi tindakan</th>
                <th>obat_id</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($tindakan as $td)
              <tr>
                <td>{{ ++$no }}</td>
                <td class="font-weight-bold">{{ $td->user_id }}</td>
                <td class="font-weight-bold">{{ $td->deskripsi_tindakan }}</td>
                <td class="font-weight-bold">{{ $td->obat_id }}</td>
                <td>
                    <span class="d-flex justify-content-center">
                        <a href="{{ route('tindakan.edit', $td->id)}}" class="btn btn-sm btn-warning mx-1" title="Ubah data"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                        <a href="/tindakan-delete/{{$td->id}}" class="btn btn-sm btn-danger delete-confirm" title="Hapus data"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a>
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
