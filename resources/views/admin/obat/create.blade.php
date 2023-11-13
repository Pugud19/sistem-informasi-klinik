@extends('admin.index')

@section('content')
<div class="col-md-10 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-center">Form Tambah Obat</h4>
        <p class="card-description text-center">
          Form Create Obat
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

        <form action="{{ route('obat.store')}}" method="POST">
            @csrf
        <div class="form-group row">
          <div class="col">
            <label>Nama Obat</label>
            <div id="the-basics">
              <input class="typeahead" type="text" name="nama_obat" placeholder="Masukkan nama Obat">
            </div>
          </div>
          <div class="col">
            <label>Expired</label>
            <div id="bloodhound">
                <input class="typeahead" type="date" name="expired" >
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
