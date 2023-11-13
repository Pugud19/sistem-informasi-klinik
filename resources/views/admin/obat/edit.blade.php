@extends('admin.index')

@section('content')
    <div class="col-md-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Form Edit obat</h4>
                  <p class="card-description text-center">
                    Form Edit  {{ $obat->id }}
                  </p>
                  <form action="{{ route('obat.update', $obat->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                  <div class="form-group row">
                    <div class="col">
                      <label>Nama obat</label>
                      <div id="the-basics">
                        <input class="typeahead" type="text" name="nama_obat" value="{{$obat->nama_obat}}">
                      </div>
                    </div>
                    <div class="col">
                        <label>Expired</label>
                        <div id="bloodhound">
                            <input class="typeahead" type="date" name="expired" value="{{$obat->expired}}">
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

