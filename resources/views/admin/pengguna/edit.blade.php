@extends('admin.index')

@section('content')
<div class="col-md-10 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-center">Form Edit User</h4>
        <p class="card-description text-center">
          Form Edit Pengguna {{ $pengguna->nama }}
        </p>
        <form action="{{ route('pengguna.update', $pengguna->id)}}" method="POST">
            @csrf
            @method('PUT')
        <div class="form-group row">
          <div class="col">
            <label>Nama Pengguna</label>
            <div id="the-basics">
              <input class="typeahead" type="text" name="nama" value="{{ $pengguna->nama }}">
            </div>
          </div>
          <div class="col">
            <label>Nomor HP</label>
            <div id="bloodhound">
              <input class="typeahead" type="text" name="nomor_hp" value="{{ $pengguna->nomor_hp }}">
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col">
            <label>email</label>
            <div id="the-basics">
              <input class="typeahead" type="email" name="email" value="{{ $pengguna->email }}">
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary mr-2">submit</button>
        </div>
        </form>
      </div>
    </div>
</div>
@endsection
