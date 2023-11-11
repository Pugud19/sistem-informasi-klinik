@extends('admin.index')

@section('content')
<div class="col-md-10 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-center">Form Tambah Pengguna</h4>
        <p class="card-description text-center">
          Form Create masa aktif pengguna
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

        <form action="{{ route('data.store')}}" method="POST">
            @csrf
        <div class="form-group row">
          <div class="col">
            <label>pengguna</label>
            <div id="the-basics">
                <select name="user_id" class="form-control">
                    <option>== pilih pengguna ==</option>
                    @foreach ($user as $u)
                    <option value="{{ $u->id }}">{{ $u->name }}</option>
                    @endforeach
                  </select>
            </div>
          </div>
          <div class="col">
            <label>internet</label>
            <div id="bloodhound">
              <select name="internet_id" class="form-control">
                <option>== pilih internet  ==</option>
                @foreach ($internet as $i)
                <option value="{{ $i->id }}">{{ $i->paket }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col">
            <label>Nama</label>
            <div id="the-basics">
              <input class="typeahead" type="text" name="nama" placeholder="Masukkan nama pengguna">
            </div>
          </div>
          <div class="col">
            <label>Awal Paket</label>
            <div id="bloodhound">
                <input class="typeahead" type="date" name="awal_paket" >
            </div>
          </div>
        </div>
        <div class="form-group row">
            <div class="col">
                <label>Akhir Paket</label>
                <div id="bloodhound">
                    <input class="typeahead" type="date" name="akhir_paket" >
                </div>
            </div>
            <div class="col">
                <label>Status</label>
                <div id="bloodhound">
                    <input class="typeahead" type="text" name="status" >
                </div>
              </div>
        </div>
        <div class="d-flex justify-content-center">
        <button type="submit"  class="btn btn-primary mr-2">submit</button>
        </div>
        </form>
      </div>
    </div>
</div>
@endsection
