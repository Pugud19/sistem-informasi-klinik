@extends('admin.index')

@section('content')

<div class="col-md-10 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between my-3">
        <p class="card-title ">Daftar Data Obat</p>
        <div>
            <a href="{{ route('obat.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        </div>
          <div class="col-12">
            <div class="table-responsive">
              <table class="display expandable-table" style="width:100%">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Nama Obat</th>
                    <th>Expired</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($obat as $o)
                  <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $o->nama_obat }}</td>
                    <td>{{ $o->expired }}</td>
                    <td>
                        <span class="d-flex justify-content-center">
                            <a href="{{ route('obat.edit', $o->id)}}" class="btn btn-sm btn-warning mx-1" title="Ubah data"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                            <a href="/obat-delete/{{$o->id}}" class="btn btn-sm btn-danger delete-confirm" title="Hapus data"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a>
                        </span>
                    </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
@endsection
