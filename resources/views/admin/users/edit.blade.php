@extends('admin.index')

@section('content')
    <div class="col-md-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Form Edit User</h4>
                  <p class="card-description text-center">
                    Form Edit Users {{ $user->name }}
                  </p>
                  <form action="{{ route('users.update', $user->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                  <div class="form-group row">
                    <div class="col">
                      <label>Role</label>
                      <div id="the-basics">
                        <input class="typeahead" type="text" name="role" value="{{$user->role}}">
                      </div>
                    </div>
                    <div class="col">
                      <label>isActive</label>
                      <div id="bloodhound">
                        <input class="typeahead" type="text" name="isactive" value="{{$user->isactive}}">
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

