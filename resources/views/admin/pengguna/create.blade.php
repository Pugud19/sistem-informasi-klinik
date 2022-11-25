@extends('admin.index')

@section('content')
<div class="col-md-10 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-center">Form Tambah Pengguna</h4>
        <p class="card-description text-center">
          Form Create Pengguna Wifi
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
            <label>Nama</label>
            <div id="the-basics">
              <input class="typeahead" type="text" name="nama">
            </div>
          </div>
          <div class="col">
            <label>Paket</label>
            <div id="bloodhound">
              {{-- <select name="user_id" class="form-control">
                <option>== pilih user id ==</option>
                @foreach ($user as $u)
                <option value="{{ $u->id }}">{{ $u->name }}</option>
                @endforeach
              </select> --}}
              <input class="typeahead" type="text" name="paket">

            </div>
          </div>
        </div>
        <div class="form-group row">
            <div class="col">
              <label>Costumer id</label>
              <div id="bloodhound">
                <input class="typeahead" type="text" name="costumer_id">
              </div>
            </div>
            <div class="col">
              <label>Teknisi</label>
              <div id="bloodhound">
                <input class="typeahead" type="text" name="teknisi">
              </div>
            </div>
        </div>
        <div class="form-group row">
        <div class="col">
            <label>router</label>
            <div id="the-basics">
              <input class="typeahead" type="text" name="router">
            </div>
        </div>
        <div class="col">
            <label>User Id</label>
            <div id="the-basics">
              {{-- <input class="typeahead" type="text" name="status_tagihan"> --}}
              <select name="user_id" class="form-control">
                <option>== pilih User Id ==</option>
                @foreach ($user as $us)
                <option value="{{ $us->id }}">{{ $us->name }} </option>
                @endforeach
            </select>
            </div>
        </div>
        </div>
        <div class="form-group row">
            <div class="col">
              <label>Tempat</label>
              <div id="the-basics">
                <input class="typeahead" type="text" name="tempat">
              </div>
            </div>
            <div class="col">
              <label>Tagihan</label>
              <div id="bloodhound">
                <input class="typeahead" type="text" name="tagihan">
              </div>
            </div>
          </div>
        <div class="form-group row">
          <div class="col">
            <label>Status Tagihan</label>
            <div id="the-basics">
              {{-- <input class="typeahead" type="text" name="status_tagihan"> --}}
              <select name="status_tagihan" class="form-control">
                <option>== pilih Status Tagihan ==</option>
                <option value="1">1</option>
                <option value="0">0</option>
              </select>
            </div>
          </div>
          <div class="col">
            <label>Nomor Hp</label>
            <div id="bloodhound">
              <input class="typeahead" type="text" name="nomor_hp">
            </div>
          </div>
        </div>
        <div class="form-group row">
            <div class="col">
              <label>Keterangan</label>
              <div id="the-basics">
                <input class="typeahead" type="text" name="keterangan">
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
