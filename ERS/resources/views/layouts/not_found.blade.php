<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <title>Login :: ERSland - @yield('title')</title>



	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="apple-mobile-web-app-capable" content="yes"> 

    
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="{{asset('css/ui-lightness/jquery-ui-1.10.0.custom.min.css')}}" rel="stylesheet">    
    <link href="{{asset('css/base-admin-3.css')}}" rel="stylesheet">
    <link href="{{asset('css/base-admin-3-responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/pages/signin.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">



</head>



<body>

	

<nav class="navbar navbar-inverse" role="navigation">



	<div class="container">

  <!-- Brand and toggle get grouped for better mobile display -->

  <div class="navbar-header">

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">

      <span class="sr-only">Toggle navigation</span>

      <span class="icon-bar"></span>

      <span class="icon-bar"></span>

      <span class="icon-bar"></span>

    </button>

    <a class="navbar-brand" href="{{ route('home') }}"><img src="/img/logo.png" width="200"></a>

  </div>



  <!-- Collect the nav links, forms, and other content for toggling -->

  <div class="collapse navbar-collapse navbar-ex1-collapse">

    <ul class="nav navbar-nav navbar-right">

		<li class="">
			<a href="{{route('home')}}">

				<i class="icon-chevron-left"></i>&nbsp;&nbsp; 

				Regresar a Inicio

			</a>

			

		</li>

    </ul>

  </div><!-- /.navbar-collapse -->

</div> <!-- /.container -->

</nav>
@yield('content')

</body>

</html>

