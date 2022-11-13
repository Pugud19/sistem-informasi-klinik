<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>AmretaNet.</title>

  <link rel="stylesheet" href="{{ asset('landing/css/maicons.css')}}">

  <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{ asset('landing/vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{ asset('landing/css/theme.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/icon/css/font-awesome.min.css')}}">

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

    @include('landing.components.navbar')

    @yield('content')


  @include('landing.components.footer')

<script src="{{ asset('landing/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{ asset('landing/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{ asset('landing/js/google-maps.js')}}"></script>

<script src="{{ asset('landing/vendor/wow/wow.min.js')}}"></script>

<script src="{{ asset('landing/js/theme.js')}}"></script>
<script>
  $(".scrollTo").on('click', function(e) {
     e.preventDefault();
     var target = $(this).attr('href');
     $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
     $('html, body').animate({
       scrollTop: ($(target).offset().top)
     }, 2000);
  });
</script>

</body>
</html>
