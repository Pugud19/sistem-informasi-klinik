@extends('admin.index')

@section('content')

<div class="col-md-10 stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Advanced Table</p>
          <div class="col-12">
            <div class="table-responsive">
              <table id="example" class="display   expandable-table" style="width:100%">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Nama</th>
                    <th>Nama Paket</th>
                    <th>Awal Paket</th>
                    <th>Akhir Paket</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><div class="badge badge-success"></div></td>
                    <td><div class="badge badge-warning"></div></td>

                        </tr>
                </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
@endsection
