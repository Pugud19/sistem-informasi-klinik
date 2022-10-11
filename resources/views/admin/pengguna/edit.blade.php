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
                  <label>Nama</label>
                  <div id="the-basics">
                    <input class="typeahead" type="text" name="nama" value="{{ $pengguna->nama }}">
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
                    <input class="typeahead" type="text" name="paket" value="{{ $pengguna->paket }}">

                  </div>
                </div>
              </div>
              <div class="form-group row">
                  <div class="col">
                    <label>Costumer id</label>
                    <div id="bloodhound">
                      <input class="typeahead" type="text" name="costumer_id" value="{{ $pengguna->costumer_id }}">
                    </div>
                  </div>
                  <div class="col">
                    <label>Teknisi</label>
                    <div id="bloodhound">
                      <input class="typeahead" type="text" name="teknisi" value="{{ $pengguna->teknisi }}">
                    </div>
                  </div>
              </div>
              <div class="form-group row">
              <div class="col">
                  <label>router</label>
                  <div id="the-basics">
                    <input class="typeahead" type="text" name="router" value="{{ $pengguna->router }}">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                  <div class="col">
                    <label>Tempat</label>
                    <div id="the-basics">
                      <input class="typeahead" type="text" name="tempat" value="{{ $pengguna->tempat }}">
                    </div>
                  </div>
                  <div class="col">
                    <label>Tagihan</label>
                    <div id="bloodhound">
                      <input class="typeahead" type="text" name="tagihan" value="{{ $pengguna->tagihan }}">
                    </div>
                  </div>
                </div>
              <div class="form-group row">
                <div class="col">
                  <label>Status Tagihan</label>
                  <div id="the-basics">
                    {{-- <input class="typeahead" type="text" name="status_tagihan"> --}}
                    <select name="status_tagihan" class="form-control">
                      <option>{{ $pengguna->status_tagihan }}</option>
                      @if($pengguna->status_tagihan == 0) 
                      <option value="1">1</option>
                      @elseif($pengguna->status_tagihan == 1) 
                      <option value="0">0</option>
                      @endif
                    </select>
                  </div>
                </div>
                <div class="col">
                  <label>Nomor Hp</label>
                  <div id="bloodhound">
                    <input class="typeahead" type="text" name="nomor_hp" value="{{ $pengguna->nomor_hp }}">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                  <div class="col">
                    <label>Keterangan</label>
                    <div id="the-basics">
                      <input class="typeahead" type="text" name="keterangan" value="{{ $pengguna->keterangan }}">
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
