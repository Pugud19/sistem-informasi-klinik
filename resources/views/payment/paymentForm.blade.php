{{-- css and js bundle --}}
<link rel="stylesheet" href="{{ asset('landing/css/maicons.css')}}">
<link rel="stylesheet" href="{{ asset('landing/css/bootstrap.css')}}">
<script src="{{ asset('landing/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{ asset('landing/js/bootstrap.bundle.min.js')}}"></script>
<link rel="stylesheet" href="{{ asset('admin/plugins/icon/css/font-awesome.min.css')}}">
{{-- css and js bundle --}}

<section>
    <div class="container py-5">
        <div class="row justify-content-center ">
                <div class="card my-4 p-3">
                    <div class="row main">
                        <div class="col-12"><span>Cart</span>&nbsp;&nbsp;&nbsp;&nbsp;<span>Shipping confirmation</span>&nbsp;&nbsp;&nbsp;&nbsp;<span>Credit card checkout</span></div>
                    </div>
                        <div class="row justify-content-center mrow">
                            <div class="col-12">
                                <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" width="35px" height="35px"/>
                                <img src="https://img.icons8.com/color/48/000000/visa.png" width="35px" height="35px"/>
                                <img src="https://img.icons8.com/color/48/000000/paypal.png" width="35px" height="35px"/>
                            </div>
                        </div>
                        <form class="form-card">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                <input type="text" class="form-control p-0" id="number" required><label class="form-control-placeholder p-0" for="number">CardNumber</label>
                             </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                <input type="text" class="form-control p-0" id="name" required><label class="form-control-placeholder p-0" for="name">Cardholder'sName</label>
                             </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control p-0" id="sdate" required><label class="form-control-placeholder p-0" for="sdate">StartDate</label>
                                 </div>
                            </div>
                            <div class="col-sm-4 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control p-0" id="expdate" required><label class="form-control-placeholder p-0" for="expdate">ExpirationDate</label>
                                 </div>
                            </div>
                            <div class="col-sm-4 col-12">
                                <div class="form-group">
                                    <input type="password" class="form-control p-0" id="passw" required><label class="form-control-placeholder p-0" for="passw">CVV</label>
                            </div>
                            </div>
                        </div>
                        <div class="row lrow mt-4 mb-3">
                            <div class="col-sm-8 col-12"><h3>Grand Total:</h3></div>
                            <div class="col-sm-4 col-12"><h5>&#36;1,449.00</h5></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-primary btn-block">Pay process</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
    </div>
</section>


