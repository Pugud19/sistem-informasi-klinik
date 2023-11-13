@extends('admin.index')

@section('content')
    <div class="col-md-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Form Edit wilayah</h4>
                  <p class="card-description text-center">
                    Form Edit  {{ $wilayah->nama_wilayah }}
                  </p>
                  <form action="{{ route('wilayah.update', $wilayah->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                  <div class="form-group row">
                    <div class="col">
                      <label>Nama Wilayah</label>
                      <div id="the-basics">
                        <input class="typeahead" type="text" name="nama_wilayah" value="{{$wilayah->nama_wilayah}}">
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

