@extends('admin.index')

@section('content')
<div class="col-md-10 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-center">Form Tambah Pengguna</h4>
        <p class="card-description text-center">
          Form Create Pengguna Internet
        </p>
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada sesuatu yang salah dengan data yang kamu input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form action="{{ route('pengguna.store')}}" method="post">
            @csrf
        <div class="form-group row">
          <div class="col">
            <label>nama</label>
            <div id="the-basics">
              <input class="typeahead" type="text" name="nama">
            </div>
          </div>
          <div class="col">
            <label>user_id</label>
            <div id="bloodhound">
              <select name="user_id" class="form-control">
                <option>== pilih user id ==</option>
                @foreach ($user as $u)
                <option value="{{ $u->id }}">{{ $u->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col">
            <label>email</label>
            <div id="the-basics">
              <input class="typeahead" type="email" name="email">
            </div>
          </div>
          <div class="col">
            <label>Nomor Hp</label>
            <div id="bloodhound">
              <input class="typeahead" type="text" name="nomor_hp">
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center">
        <button type="submit" name="proses" class="btn btn-primary mr-2">submit</button>
        </div>
        </form>
      </div>
    </div>
</div>
@endsection
