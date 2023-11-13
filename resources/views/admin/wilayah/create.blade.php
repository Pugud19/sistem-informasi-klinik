@extends('admin.index')

@section('content')
<div class="col-md-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Form Wilayah</h4>
                  <p class="card-description text-center">
                    Form untuk data Wilayah
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

                  <form action="{{ route('wilayah.store')}}" method="POST">
                    @csrf
                  <div class="form-group row">
                    <div class="col">
                      <label>Nama Wilayah</label>
                      <div id="the-basics">
                        <input class="typeahead" type="text" name="nama_wilayah" placeholder="Masukkan Nama Wilayah">
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary mr-2">simpan</button>
                  </div>
                  </form>
                </div>
              </div>
</div>
@endsection
