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
        <div class="card-body">
          <div class="row d-flex justify-content-center pb-5">
            <div class="col-md-7 col-xl-5 mb-4 mb-md-0">
              <div class="py-4 d-flex flex-row">
                <h5><span class="far fa-check-square pe-2"></span><b>Amreta</b> |</h5>
                <span class="ps-2">Pay</span>
              </div>
              <h4 class="text-success">$85.00</h4>
              <h4>Diabetes Pump & Supplies</h4>
              <hr />
              <div class="pt-2">
                <div class="d-flex pb-2">
                  <div>
                    <p>
                      <b>Patient Balance <span class="text-success">$13.24</span></b>
                    </p>
                  </div>
                  <div class="ms-auto">
                    <p class="text-primary">
                      <i class="fas fa-plus-circle text-primary pe-1"></i>Add payment card
                    </p>
                  </div>
                </div>
                <p>
                  This is an estimate for the portion of your order (not covered by
                  insurance) due today . once insurance finalizes their review refunds
                  and/or balances will reconcile automatically.
                </p>
                <form class="pb-3">
                  <div class="d-flex flex-row">
                    <div class="d-flex align-items-center pe-2">
                      <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2"
                        value="" aria-label="..." />
                    </div>
                    <div class="rounded border d-flex w-100 p-3 align-items-center">
                      <p class="mb-0">
                        <i class="fab fa-cc-mastercard fa-lg text-dark pe-2"></i>Mastercard
                        Office
                      </p>
                      <div class="ms-auto">************1038</div>
                    </div>
                  </div>
                </form>
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
                  <div class="ms-auto">$40.00</div>
                </div>
                <div class="p-2 d-flex">
                  <div class="col-8">
                    Biaya Pemasangan dan juga pemberian alat (not reached)
                  </div>
                  <div class="ms-auto">$6500.00</div>
                </div>
                <div class="border-top px-2 mx-2"></div>
                <div class="p-2 d-flex">
                  <div class="col-8">
                    Total Pembayaran <span class="fa fa-question-circle text-dark"></span>
                  </div>
                  <div class="ms-auto"><b>$71.76</b></div>
                </div>
                <div class="border-top px-2 mx-2"></div>
                <div class="p-2 d-flex pt-3">
                  <div class="col-8"><b>Total</b></div>
                  <div class="ms-auto"><b class="text-success">$85.00</b></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
