@extends('landing.index')

@section('content')
  <div class="page-section">
    <div class="container">
      <div class="row text-center align-items-center">
        <div class="col-lg-12 py-3">
          <p class="mb-3 font-weight-medium text-lg">Tagihan</p>
          @foreach ($tagihans as $tg)
          <p class="mb-0 text-secondary">Tagihan yang kamu harus bayar adalah {{ $tg->total_biaya}} </p>
          @endforeach
        </div>
        {{-- <div class="col-lg-4 py-3">
          <div class="display-4 text-center text-primary"><span class="mai-call"></span></div>
          <p class="mb-3 font-weight-medium text-lg">Phone</p>
          <p class="mb-0"><a href="#" class="text-secondary">+62 8515 6101 271</a></p>
          <p class="mb-0"><a href="#" class="text-secondary">+62 8999 0994 340</a></p>
        </div>
        <div class="col-lg-4 py-3">
          <div class="display-4 text-center text-primary"><span class="mai-mail"></span></div>
          <p class="mb-3 font-weight-medium text-lg">Email Address</p>
          <p class="mb-0"><a href="#" class="text-secondary">pugudbenjapu19@gmail.com</a></p>
        </div> --}}
      </div>
    </div>

  </div>
@endsection


