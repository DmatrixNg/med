<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

     <title>Med</title>

  	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="{{asset("assets/vendor_components/bootstrap/dist/css/bootstrap.min.css")}}">

	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="{{asset("css/css/bootstrap-extend.css")}}">


	<!-- Theme style -->
	<link rel="stylesheet" href="{{asset("css/css/master_style.css")}}">
<style>
    .invalid-feedback {
        display: block;
    }
</style>
	<!-- Crypto_Admin skins -->
	{{-- <link rel="stylesheet" href="css/css/skins/_all-skins.css"> --}}
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


            @yield('content')

    </div>
</body>
</html>
