<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8"/>
		@yield('title')
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1" name="viewport"/>
		<meta content="" name="description"/>
		<meta content="" name="author"/>
		<!-- BEGIN GLOBAL MANDATORY STYLES -->
		<link href='http://fonts.googleapis.com/css?family=Hind:400,500,300,600,700' rel='stylesheet' type='text/css'>
		<link href="{{ asset('packages/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
		<link href="{{ asset('packages/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet">
		<link href="{{ asset('packages/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
		<!-- END GLOBAL MANDATORY STYLES -->
		<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
		<link href="{{ asset('packages/owl.carousel/assets/owl.carousel.css') }}" rel="stylesheet">
		<link href="{{ asset('packages/slider-revolution-slider/rs-plugin/css/settings.css') }}" rel="stylesheet">
		<link href="{{ asset('packages/cubeportfolio/cubeportfolio/css/cubeportfolio.min.css') }}" rel="stylesheet">
		<!-- END PAGE LEVEL PLUGIN STYLES -->
		<!-- BEGIN THEME STYLES -->
		<link href="{{ asset('css/app/layout.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ asset('css/app/custom.css') }}" rel="stylesheet" type="text/css"/>
		<!-- END THEME STYLES -->
		<link rel="shortcut icon" href="favicon.ico"/>

	</head>

	<body class="page-header-fixed">
	<!-- BEGIN MAIN LAYOUT -->

	<!-- Header BEGIN -->
    <header class="page-header">
    	
    	<div class="pre-header">
    	    <div class="container">
    	        <div class="row">
    	            <div class="col-md-6 col-sm-6 additional-shop-info">
    	                <ul class="list-unstyled list-inline">
    	                </ul>
    	            </div>
    	            <div class="col-md-6 col-sm-6 additional-nav" style="margin-top: 5px;">
    	                <ul class="list-unstyled list-inline pull-right" style="color: #808080 !important;">
    	                	<li><i class="icon-call-end"></i><span> +1 456 6717</span></li>
    	                    <li><i class="icon-lock"></i><span> <a>Log In</a></span></li>
    	                    <li> Eng <i class="fa fa-angle-right"></i></li>
    	                </ul>
    	            </div>
    	        </div>
    	    </div>        
    	</div>

        <nav class="navbar navbar-fixed-top" role="navigation" style="min-height: 90px!important;">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="toggle-icon">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
                    </button>
                    <a class="navbar-brand" href="/" style="height: 110px !important;">
                        <img class="logo-default" src="../../../../../images/app/logo_default.png" style="width: 100%;" alt="Logo">
                        <img class="logo-scroll" src="../../../../../images/app/logo_scroll.png" style="width: 100%;" alt="Logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    @include('app.layouts.menu_header')
                </div>
                <!-- End Navbar Collapse -->
            </div>
            <!--/container-->
        </nav>

    </header>
    <!-- Header END -->

    <!-- BEGIN MAIN LAYOUT -->
    <div class="page-content">

        @yield('content')

        <!-- SUBSCRIBE BEGIN -->
        <div class="subscribe">
            <div class="container">
                <div class="subscribe-wrap">
                    <div class="subscribe-body subscribe-desc md-margin-bottom-30">
                        <h1>WE SEARCH GREAT PERSON</h1>
                    </div>
                    <div class="subscribe-body">
                        <form class="form-wrap input-field">
                            <div class="form-wrap-group">
                                <button type="submit" class="btn-danger btn-md btn-block">Join our Team</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- SUBSCRIBE END -->

        <!-- PAGE FOOTER -->
        <!-- PAGE FOOTER END -->

    </div>

    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<![endif]-->
	<script src="{{ asset('packages/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('packages/jquery-migrate.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('packages/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="{{ asset('packages/jquery.easing.js') }}" type="text/javascript"></script>
	<script src="{{ asset('packages/jquery.parallax.js') }}" type="text/javascript"></script>
	<script src="{{ asset('packages/smooth-scroll/smooth-scroll.js') }}" type="text/javascript"></script>
	<script src="{{ asset('packages/owl.carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
	<!-- BEGIN Cubeportfolio -->
	<script src="{{ asset('packages/cubeportfolio/cubeportfolio/js/jquery.cubeportfolio.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/app/portfolio.js') }}" type="text/javascript"></script>
	<!-- END Cubeportfolio -->
	<!-- BEGIN RevolutionSlider -->  
	<script src="{{ asset('packages/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js') }}" type="text/javascript"></script> 
	<script src="{{ asset('packages/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/app/revo-ini.js') }}" type="text/javascript"></script>
	<!-- END RevolutionSlider -->
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="{{ asset('js/app/layout.js') }}" type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
	jQuery(document).ready(function() {    
	    Layout.init();
	    RevosliderInit.initRevoSlider();
	});
	</script>
	</body>
</html>