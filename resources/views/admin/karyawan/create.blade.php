@extends('admin.index')

@section('content')
<div class="col-md-10 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-center">Form Gaji Karyawan</h4>
        <p class="card-description text-center">
          Form Create Gaji Karyawan
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

        <form action="{{ route('karyawan.store')}}" method="post">
            @csrf
        <div class="form-group row">
          <div class="col">
            <label>Nama</label>
            <div id="the-basics">
              <input class="typeahead" type="text" name="nama">
            </div>
          </div>
          <div class="col">
            <label>Pemasangan</label>
            <div id="bloodhound">
              <input class="typeahead" type="text" name="pemasangan">
            </div>
          </div>
        </div>
        <div class="form-group row">
            <div class="col">
              <label>Gaji Pokok</label>
              <div id="bloodhound">
                <input class="typeahead" type="text" name="gaji_pokok">
              </div>
            </div>
            <div class="col">
              <label>Gaji Kehadiran</label>
              <div id="bloodhound">
                <input class="typeahead" type="text" name="gaji_kehadiran">
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
