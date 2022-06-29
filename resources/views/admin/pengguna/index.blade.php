@extends('admin.index')

@section('content')

    <div class="col-md-10 col-lg-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body my-3">
            <div class="d-flex justify-content-between">
                <p class="card-title">Data Pengguna Jasa</p>
                <div>
                    <a href="{{ route('pengguna.create')}}"  class="btn btn-primary mr-2 mb-3"><i class="fa fa-plus"></i> Tambah</a>
                </div>
            </div>
            <div class="col-md-12 col-lg-12">
              <div class="table-responsive text-center">
                <table class="table display expandable-table" style="width:100%">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>paket</th>
                      <th>nama</th>
                      <th>tempat</th>
                      <th>tagihan</th>
                      <th>status tagihan</th>
                      <th>nomor hp</th>
                      <th>keterangan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pengguna as $p)
                    <tr>
                      <td>{{ ++$no }}</td>
                      <td>{{ $p->paket }}</td>
                      <td>{{ $p->nama }}</td>
                      <td>{{ $p->tempat }}</td>
                      <td>{{ number_format($p->tagihan) }}</td>
                      <td>{{ $p->status_tagihan }}</td>
                      <td>{{ $p->nomor_hp }}</td>
                      <td>{{ $p->keterangan }}</td>
                      <td>
                        <span class="d-flex justify-content-center">
                            <a href="{{ route('pengguna.edit', $p->id)}}" class="btn btn-sm btn-warning mx-1" title="Ubah data"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                            <a href="/pengguna-delete/{{$p->id}}" class="btn btn-sm btn-danger delete-confirm" title="Hapus data"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a>
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
