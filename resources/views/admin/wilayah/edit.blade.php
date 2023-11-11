@extends('admin.index')

@section('content')
    <div class="col-md-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Form Edit Internet</h4>
                  <p class="card-description text-center">
                    Form Edit Paket {{ $internet->paket }}
                  </p>
                  <form action="{{ route('internet.update', $internet->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                  <div class="form-group row">
                    <div class="col">
                      <label>Paket</label>
                      <div id="the-basics">
                        <input class="typeahead" type="text" name="paket" value="{{$internet->paket}}">
                      </div>
                    </div>
                    <div class="col">
                      <label>Kecepatan</label>
                      <div id="bloodhound">
                        <input class="typeahead" type="text" name="kecepatan" value="{{$internet->kecepatan}}">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col">
                      <label>Lama Penggunaan</label>
                      <div id="the-basics">
                        <input class="typeahead" type="text" name="lama_penggunaan" value="{{$internet->lama_penggunaan}}">
                      </div>
                    </div>
                    <div class="col">
                      <label>Harga</label>
                      <div id="bloodhound">
                        <input class="typeahead" type="text" name="harga" value="{{$internet->harga}}">
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

