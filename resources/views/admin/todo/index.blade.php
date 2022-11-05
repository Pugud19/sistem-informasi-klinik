@extends('admin.index')

@section('content')

<div class="tab-content content-wrapper" id="setting-content">
    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
      <div class="add-items d-flex px-3 mb-0">
        <form class="form w-100">
          <div class="form-group d-flex">
            <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
            <a href="index.php?hal=form_todo" type="submit" class="btn btn-primary mr-2">Add</a>
          </div>
        </form>
      </div>
      <div class="list-wrapper px-3">
        <ul class="d-flex flex-column-reverse todo-list">
          <li>
            <div class="form-check">
              <label class="form-check-label">
                @foreach ($todo as $td)
                <input class="checkbox" type="checkbox">
                {{ $td->nama_pekerjaan }}
              </label>
              @endforeach
            </div>

          </li>

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
