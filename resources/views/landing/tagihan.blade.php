{{-- css and js bundle --}}
<link rel="stylesheet" href="{{ asset('landing/css/maicons.css')}}">
<link rel="stylesheet" href="{{ asset('landing/css/bootstrap.css')}}">
<script src="{{ asset('landing/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{ asset('landing/js/bootstrap.bundle.min.js')}}"></script>
<link rel="stylesheet" href="{{ asset('admin/plugins/icon/css/font-awesome.min.css')}}">
{{-- css and js bundle --}}

<section style="background-color: #eee;">
    <div class="container py-5">
      <div class="card">
        @foreach ( (array) Auth::user()->pengguna as $pg)
        <div class="card-body">
          <div class="row d-flex justify-content-center pb-5">
            <div class="col-md-7 col-xl-5 mb-4 mb-md-0">
              <div class="py-4 d-flex flex-row">
                <h5><span class="far fa-check-square pe-2"></span><b>Amreta</b> |</h5>
                <span class="ps-2">Pay</span>
              </div>
              <h4 class="text-success">{{ $pg->tagihan }}</h4>
              <h4>{{ $pg->nama }}</h4>
              <hr />
              <div class="pt-2">
                <div class="d-flex pb-2">
                </div>
                <p>
                  This is an estimate for the portion of your order (not covered by
                  insurance) due today . once insurance finalizes their review refunds
                  and/or balances will reconcile automatically.
                </p>
                <input type="button" value="Proceed to payment" class="btn btn-primary btn-block btn-lg" />
              </div>
            </div>

            <div class="col-md-5 col-xl-4 offset-xl-1">
              <div class="py-4 d-flex justify-content-end">
                <h6><a href="{{ url('/home')}}">Cancel and return to website</a></h6>
              </div>
              <div class="rounded d-flex flex-column p-2" style="background-color: #f8f9fa;">
                <div class="p-2 me-3">
                  <h4>Pembayaran Recap</h4>
                </div>
                <div class="border-top px-2 mx-2"></div>
                <div class="p-2 d-flex pt-3">
                  <div class="col-8">Total Harga Paket yang harus dibayar</div>
                  <div class="ms-auto">{{ $pg->tagihan }}</div>
                </div>
                {{-- <div class="p-2 d-flex">
                  <div class="col-8">
                    Biaya Pemasangan dan juga pemberian alat (not reached)
                  </div>
                  <div class="ms-auto">$6500.00</div>
                </div> --}}
                <div class="border-top px-2 mx-2"></div>
                <div class="p-2 d-flex">
                  <div class="col-8">
                    Total Pembayaran <span class="fa fa-question-circle text-dark"></span>
                  </div>
                  <div class="ms-auto"><b>{{$pg->tagihan}}</b></div>
                </div>
                <div class="border-top px-2 mx-2"></div>
                <div class="p-2 d-flex pt-3">
                  <div class="col-8"><b>Total</b></div>
                  <div class="ms-auto"><b class="text-success">{{ $pg->tagihan }}</b></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

  </section>
