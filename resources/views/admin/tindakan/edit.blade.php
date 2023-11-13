@extends('admin.index')

@section('content')
    <div class="col-md-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Form Edit tindakan</h4>
                  <p class="card-description text-center">
                    Form Edit  {{ $tindakan->id }}
                  </p>
                  <form action="{{ route('tindakan.update', $tindakan->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                  <div class="form-group row">
                    <div class="col">
                      <label>Nama tindakan</label>
                      <div id="the-basics">
                        <input class="typeahead" type="text" name="deskripsi_tindakan" value="{{$tindakan->deskripsi_tindakan}}">
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

