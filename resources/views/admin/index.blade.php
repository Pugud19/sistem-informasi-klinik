<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>AmretaNet.</title>
  <!-- plugins css -->
     <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('admin/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png')}}" />
  <!-- icon fontawesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/icon/css/font-awesome.min.css')}}">


</head>
<body>
    @include('sweetalert::alert')
  <div class="container-scroller">
    <!-- navbar start -->
     @include('admin/components/navbar')
    <!-- navbar end -->
    <!-- right_sidebar start  -->
     @include('admin/components/right_sidebar')
    <!-- right_sidebar end -->
    <!-- main start -->
    <div class="container-fluid page-body-wrapper">
      <!-- left sidebar start -->
     @include('admin/components/left_sidebar')
    <!-- left sidebar end -->
    <!----- awal area link internal ----->
    @yield('content')


    <!----- akhir area link internal ----->
    </div>
    <!-- main end -->

    <!-- footer start -->
     @include('admin/components/footer')
    <!-- footer end -->

  </div>
  <!-- container-scroller -->

  <!-- Js Plugins  -->

  <!-- plugins:js -->
  <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('admin/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{ asset('admin/js/dataTables.select.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('admin/js/off-canvas.js')}}"></script>
  <script src="{{ asset('admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('admin/js/template.js')}}"></script>
  <script src="{{ asset('admin/js/settings.js')}}"></script>
  <script src="{{ asset('admin/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('admin/js/dashboard.js')}}"></script>
  <script src="{{ asset('admin/js/Chart.roundedBarCharts.js')}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    $('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Apakah Kamu Yakin?',
        text: 'Data ini akan dihapus secara permanen!',
        icon: 'warning',
        buttons: ["Tidak", "Ya!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});
  </script>
  <!-- End custom js for this page-->
</body>

</html>

