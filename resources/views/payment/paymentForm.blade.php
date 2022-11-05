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
                    <div class="row main text-center">
                        <div class="col-12"><h3>Form Pembayaran AmretaNet.</h3></div>
                    </div>
                        <form class="form-card">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-control-placeholder p-0" for="number">Nama</label>
                                <input type="text" class="form-control p-0" id="number" required>
                             </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-control-placeholder p-0" for="name">Alamat</label>
                                <input type="text" class="form-control p-0" id="name" required>
                             </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-control-placeholder p-0" for="name">No Hp</label>
                                <input type="text" class="form-control p-0" id="name" required>
                             </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control p-0" id="sdate" required><label class="form-control-placeholder p-0" for="sdate">Tanggal</label>
                                </div>
                            </div>
                            <div class="col-sm-4 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control p-0" id="expdate" required><label class="form-control-placeholder p-0" for="expdate">Tipe Pembayaran</label>
                                 </div>
                            </div>
                            <div class="col-sm-4 col-12">
                                <div class="form-group">
                                    <input type="password" class="form-control p-0" id="passw" required><label class="form-control-placeholder p-0" for="passw">Nama Paket</label>
                            </div>
                            </div>
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


