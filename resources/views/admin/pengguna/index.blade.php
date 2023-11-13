@extends('admin.index')

@section('content')

    <div class="col-md-10 col-lg-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body my-3">
            <div class="d-flex justify-content-between">
                <p class="card-title">Data Pasien</p>
                <div class="d-flex justify-content-around">
                {{-- search box --}}
                <div>
                    <form action="{{ route('search') }}" method="GET">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control py-4 input-text input-color text-monospace"
                                    placeholder="Search nama Pengguna.." name="search" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2" value="{{ old('search') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-submit btn-lg color-btn" type="submit"><i
                                            class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- search box --}}
                {{-- button tambah pengguna --}}
                <div>
                <a href="{{ route('pengguna.create')}}"  class="btn btn-primary mr-2 mb-3"><i class="fa fa-plus"></i> Tambah</a>
                </div>
                {{-- button tambah pengguna --}}
                </div>
            </div>
            <div class="col-md-12 col-lg-12">
              <div class="table-responsive text-center">
                <table class="table display expandable-table" style="width:100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>User Id</th>
                      <th>Nama</th>
                      <th>Wilayah Id</th>
                      <th>Nomor hp</th>
                      <th>Settings</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pengguna as $p)
                    <tr>
                      <td>{{ ++$no }}</td>
                      <td>{{ $p->user_id }}</td>
                      <td>{{ $p->nama }}</td>
                      <td>{{ $p->wilayah_id }}</td>
                      <td>{{ $p->nomor_hp }}</td>
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
