@extends('admin.index')

@section('content')

<div class="d-flex justify-content-center mx-auto align-items-center">
    <div class="col-md-10 text-center justify-content-center ">
        <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <a href="index.php?hal=shopee" class="card-body">
                      <p class="fs-30 text-white  my-4">ShopeePay</p>
                    </a>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-light-blue">
                    <a href="index.php?hal=bri" class="card-body">
                    <p class="fs-30 text-white  my-4">BRI Transfer</p>
                    </a>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-light-danger">
                    <a href="index.php?hal=bca" class="card-body">
                    <p  class="fs-30 text-white  my-4">BCA Transfer</p>
                    </a>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <a href="index.php?hal=cash" class="card-body">
                    <p class="fs-30 text-white  my-4">Cash</p>
                    </a>
                  </div>
                </div>
        </div>
    </div>
</div>
@endsection

