@extends('admin.index')

@section('content')
<div class="col-md-10 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-center">Form Tambah Tindakan</h4>
        <p class="card-description text-center">
          Form Create Tindakan
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

        <form action="{{ route('tindakan.store')}}" method="post">
            @csrf
        <div class="form-group row">
          <div class="col">
            <label>Deskripsi Tindakan</label>
            <div id="the-basics">
              <input class="typeahead" type="text" name="deskripsi_tindakan">
            </div>
          </div>
        </div>
        <div class="form-group row">
        <div class="col">
            <label>Obat</label>
            <div id="the-basics">
                {{-- <input class="typeahead" type="text" name="status_tagihan"> --}}
                <select name="obat_id" class="form-control">
                  <option>== pilih Wilayah Id ==</option>
                  @foreach ($obat as $ob)
                  <option value="{{ $ob->id }}">{{ $ob->nama_obat }} </option>
                  @endforeach
                </select>
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
                <label>Tanggal</label>
                <div id="bloodhound">
                    <input class="typeahead" type="date" name="tanggal" >
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
