@extends('admin.index')

@section('content')
<div class="tab-content content-wrapper" id="setting-content">
    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
      <div class="add-items d-flex px-3 mb-0">
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

        <form class="form w-100" action="{{ route('todo.store')}}" method="POST">
          <div class="form-group d-flex">
            @csrf
            <input type="text" class="form-control todo-list-input" name="nama_pekerjaan" placeholder="Add To-do">
            <input class="typeahead" type="date" name="tanggal" >
            <button type="submit" class="btn btn-primary mr-2">Add</button>
          </div>
        </form>
      </div>
      <div class="list-wrapper px-3">
        <ul class="d-flex flex-column-reverse todo-list">
            @foreach ($todo as $td)
            <li>
            <div class="form-check d-flex justify-conten-between">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                {{ $td->nama_pekerjaan }}
              </label>
            </div>
                <a href="/todo-delete/{{ $td->id }}" class="mx-2" title="Hapus data"><i class="ti-close text-danger"></i></a>
            </li>
            @endforeach
        </ul>
      </div>
      <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
      <div class="events pt-4 px-3 mb-4">
        @foreach ($todo as $td)

        <div class="wrapper d-flex mb-2">
          <i class="ti-control-record text-primary mr-2"></i>
          <span>{{ $td->nama_pekerjaan }}</span>
        </div>
        <p class="mb-0 font-weight-thin text-gray my-2">{{ $td->tanggal }}</p>
        @endforeach
      </div>
    </div>
    <!-- To do section tab ends -->
</div>
@endsection
