@extends('admin.index')

@section('content')
<div class="col-md-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Form Internet</h4>
                  <p class="card-description text-center">
                    Form untuk data internet
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

                  <form action="{{ route('internet.store')}}" method="POST">
                    @csrf
                  <div class="form-group row">
                    <div class="col">
                      <label>Paket</label>
                      <div id="the-basics">
                        <input class="typeahead" type="text" name="paket" placeholder="Nama Paket">
                      </div>
                    </div>
                    <div class="col">
                      <label>Kecepatan</label>
                      <div id="bloodhound">
                        <input class="typeahead" type="text" name="kecepatan" placeholder="Kecepatan Internet">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col">
                      <label>Lama Penggunaan</label>
                      <div id="the-basics">
                        <input class="typeahead" type="text" name="lama_penggunaan" placeholder="Lama penggunaan">
                      </div>
                    </div>
                    <div class="col">
                      <label>Harga</label>
                      <div id="bloodhound">
                        <input class="typeahead" type="text" name="harga" placeholder="Harga">
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
