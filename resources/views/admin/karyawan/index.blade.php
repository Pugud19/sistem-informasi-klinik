@extends('admin.index')

@section('content')

    <div class="col-md-10 col-lg-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body my-3">
            <div class="d-flex justify-content-between">
                <p class="card-title">Data Karyawan</p>
                <div>
                    <a href="{{ route('karyawan.create')}}"  class="btn btn-primary mr-2 mb-3"><i class="fa fa-plus"></i> Tambah</a>
                </div>
            </div>
            <div class="col-md-12 col-lg-12">
              <div class="table-responsive text-center">
                <table class="table display expandable-table" style="width:100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Pemasangan</th>
                      <th>Gaji Pokok</th>
                      <th>Gaji Kehadiran</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($gaji as $g)
                    <tr>
                      <td>{{ ++$no }}</td>
                      <td>{{ $g->nama }}</td>
                      <td>{{ $g->pemasangan }}</td>
                      <td>{{ $g->gaji_pokok }}</td>
                      <td>{{ $g->gaji_kehadiran }}</td>
                      <td>
                        <span class="d-flex justify-content-center">
                            <a href="{{ route('karyawan.edit', $g->id)}}" class="btn btn-sm btn-warning mx-1" title="Ubah data"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                            <a href="/pengguna-delete/{{$g->id}}" class="btn btn-sm btn-danger delete-confirm" title="Hapus data"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a>
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
