@extends('admin.index')

@section('content')

<div class="col-md-10 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between my-3">
        <p class="card-title ">Daftar Data Masa Aktif Pengguna</p>
        <div>
            <a href="{{ route('data.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        </div>
          <div class="col-12">
            <div class="table-responsive">
              <table class="display expandable-table" style="width:100%">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>user_id</th>
                    <th>internet_id</th>
                    <th>Nama</th>
                    <th>Awal Paket</th>
                    <th>Akhir Paket</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($masaAktif as $m)
                  <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $m->user_id }}</td>
                    <td>{{ $m->internet_id }}</td>
                    <td>{{ $m->nama }}</td>
                    <td>{{ $m->awal_paket }}</td>
                    <td>{{ $m->akhir_paket }}</td>
                    <td><div class="badge badge-success">{{ $m->status }}</div></td>
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
