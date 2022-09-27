@extends('admin.index')

@section('content')

    <div class="col-md-10 col-lg-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body my-3">
            <div class="d-flex justify-content-between">
                <p class="card-title">Data User Aplikasi</p>
                <div>
                    {{-- <a href="{{ route('users.create')}}"  class="btn btn-primary mr-2 mb-3"><i class="fa fa-plus"></i> Tambah</a> --}}
                </div>
            </div>
            <div class="col-md-12 col-lg-12">
              <div class="table-responsive text-center">
                <table class="table display expandable-table" style="width:100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>IsActive</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $u)
                    <tr>
                      <td>{{ ++$no }}</td>
                      <td>{{ $u->name }}</td>
                      <td>{{ $u->email }}</td>
                      <td>{{ $u->role }}</td>
                      <td>{{ $u->isactive }}</td>
                      <td>
                        <span class="d-flex justify-content-center">
                            <a href="{{ route('users.edit', $u->id)}}" class="btn btn-sm btn-warning mx-1" title="Ubah data"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                            <a href="/users-delete/{{$u->id}}" class="btn btn-sm btn-danger delete-confirm" title="Hapus data"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a>
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
