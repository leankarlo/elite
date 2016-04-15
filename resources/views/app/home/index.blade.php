@extends('app.layouts.base_layout')

@section('title')
	<title>{{ Config::get('app.clientapp') }}</title>
@stop

@section('head')

@stop


@section('content')
	
	<!-- BEGIN INTRO SECTION -->
    <section id="intro">
        <!-- Slider BEGIN -->
        <div class="page-slider">
            <div class="fullwidthbanner-container revolution-slider">
                <div class="banner">
                    <ul id="revolutionul">
                        <!-- THE NEW SLIDE -->
                        <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="">
                            <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                            <img src="../../../../../images/app/bg/HomeBG1.jpg" alt="">

                            <div class="caption lfb tp-resizeme" data-x="right" data-y="center" data-hoffset="-60" data-easing="easeOutExpo">
                                <div class="homeheader">
                                    <span>Fast, Affordable and Quality</span><br>
                                    <strong>Translation or Interpreting</strong><br>
                                    services by native speakers<br>
                                    located worldwide
                                </div>
                                <div class="homeaction">
                                    <a class="btn-danger btn-sm btn-block dropdown-toggle" href="javascript:;" data-toggle="dropdown" style>
                                        Order Translations
                                        <i class="fa fa-angle-right"></i>
                                    </a>

                                    <a class="btn-sm btn-block btn-dark dropdown-toggle" href="javascript:;" data-toggle="dropdown" style>
                                        Order Interpreting
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Slider END -->
    </section>
    <!-- END INTRO SECTION -->
    <a href="#intro" class="go2top"><i class="fa fa-arrow-up"></i></a>

@endsection


@section('buttom_scripts')

@stop