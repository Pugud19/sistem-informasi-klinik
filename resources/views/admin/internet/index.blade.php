@extends('admin.index')

@section('content')
<div class="col-md-10 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title mb-0">Daftar Paket Internet</p>
        <div class="table-responsive">
          <table class="table table-striped table-borderless">
            <thead>
              <tr>
                <th>Paket</th>
                <th>Kecepatan</th>
                <th>Lama Penggunaan</th>
                <th>Harga</th>
                <th>Ket</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td></td>
                <td class="font-weight-bold"></td>
                <td class="font-weight-medium"><div class="badge badge-success"></div></td>
                <td class="font-weight-medium"><div class="badge badge-warning"></div></td>
                <td class="font-weight-medium">

                </td>
                </tr>

            </tbody>
          </table>
        </div>
        <div class="d-flex justify-content-end">
        <a href="index.php?hal=form_internet" type="submit" class="btn btn-primary mr-2"><i class="fa fa-plus"></i> Tambah</a>
        </div>
      </div>
    </div>
  </div>
@endsection
