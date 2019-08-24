<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ozymandias</title>
<!-- Favicons================================================== -->
<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png">
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome/css/font-awesome.css">
<!-- Stylesheet================================================== -->
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>

<body  id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="{{ url('/') }}">Ozymandias</a>
      <!--<div class="phone"><span>Call Today</span>320-123-4321</div>-->
    </div>

  
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="{{ route('login') }}" class="page-scroll">@lang('Login')</a></li>
        <li><a href="#about" class="page-scroll">@lang('Services')</a></li>
        <li><a href="#services" class="page-scroll">@lang('Ammonia')</a></li>
        <li><a href="#portfolio" class="page-scroll">@lang('About')</a></li>
      </ul>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    
    <!-- /.navbar-collapse --> 
  </div>
</nav>

@yield('content')

<script type="text/javascript" src="assets/js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="assets/js/bootstrap.js"></script> 
<script type="text/javascript" src="assets/js/SmoothScroll.js"></script> 
<script type="text/javascript" src="assets/js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="assets/js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="assets/js/contact_me.js"></script> 
<script type="text/javascript" src="assets/js/main.js"></script>	

	

</body>












</html>






