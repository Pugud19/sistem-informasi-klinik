@extends('admin.index')

@section('content')
<div class="col-md-10 grid-margin stretch-card">
    <div class="card">
      <div class="card-body my-3">
        <div class="d-flex justify-content-between">
        <p class="card-title mb-0">Daftar Paket Internet</p>
        <div>
            <a href="{{ route('internet.create')}}" class="btn btn-primary mr-2"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        </div>

        <div class="table-responsive">
          <table class="table table-striped table-borderless text-center">
            <thead>
              <tr>
                <th>Paket</th>
                <th>Lama Penggunaan</th>
                <th>Kecepatan</th>
                <th>Harga</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($internet as $i)
              <tr>
                <td class="font-weight-bold">{{ $i->paket }}</td>
                <td class="font-weight-medium"><div class="badge badge-success">{{ $i->lama_penggunaan }}</div></td>
                <td class="font-weight-medium"><div class="badge badge-warning">{{ $i->kecepatan }}</div></td>
                <td class="font-weight-medium">
                    {{  number_format($i->harga) }}
                </td>
                <td>
                    <span class="d-flex justify-content-center">
                        <a href="{{ route('internet.edit', $i->id)}}" class="btn btn-sm btn-warning mx-1" title="Ubah data"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                        <a href="/internet-delete/{{$i->id}}" class="btn btn-sm btn-danger delete-confirm" title="Hapus data"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a>
                    </span>
                </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <div class="py-5">{{ $internet->links() }}</div>
    </div>
    </div>
  </div>
@endsection
