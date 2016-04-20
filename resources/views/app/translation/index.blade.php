@extends('app.layouts.base_layout2')

@section('title')
	<title>{{ Config::get('app.clientapp') }}</title>
@stop

@section('head')

@stop


@section('content')
	
    <!-- PAGE HEADER BEGIN -->
    <div class="titleheader">
        <div class="container header">
            <div class="titl-wrap">
                <div class="titleheader-body titleheader-desc">
                    <h1>TRANSLATION</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam aliquam tellus vel urna</p>
                </div>
                <div class="titleheader-body">
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE HEADER END -->

    <section id="about">
        <div class="container service-bg">
            <div class="row">
                <div class="col-md-6 col-sm-6 pad-left pad-top service-desc">
                    <h1>About Us</h1>
                    <p>Maecenas congue tortor luctus neque placerat, vestibulum suscipit turpis vulputate. Proin nec lorem molestie, sagittis dui et, aliquam leo. Vestibulum risus diam, malesuada efficitur malesuada.</p>

                    <a href="#">read more <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="col-md-6 col-sm-6 pad-right">
                    <img class="logo-default" src="../../../../../images/app/about/aboutimg1.png" alt="Logo">
                </div>
            </div>
        </div>
    </section>

    <section class="aboutgrey">
        <div class="container service-bg">
            <div class="row">
                
                <div class="col-md-6 col-sm-6 pad-left">
                    <img class="logo-default" src="../../../../../images/app/about/aboutimg2.png" alt="Logo">
                </div>

                <div class="col-md-6 col-sm-6 pad-right pad-top service-desc">
                    <h1>Technology driven<br>People-centric</h1>
                    <p>Maecenas congue tortor luctus neque placerat, vestibulum suscipit turpis vulputate. Proin nec lorem molestie, sagittis dui et, aliquam leo. Vestibulum risus diam, malesuada efficitur malesuada.</p>

                    <a href="#">read more <i class="fa fa-long-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </section>

    <section id="about">
        <div class="container service-bg">
            <div class="row">
                <div class="col-md-6 col-sm-6 pad-left pad-top service-desc">
                    <h1>Price</h1>
                    <p>Maecenas congue tortor luctus neque placerat, vestibulum suscipit turpis vulputate. Proin nec lorem molestie, sagittis dui et, aliquam leo. Vestibulum risus diam, malesuada efficitur malesuada.</p>

                    <a href="#">read more <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="col-md-6 col-sm-6">
                    <img class="logo-default" src="../../../../../images/app/about/aboutimg3.png" alt="Logo">
                </div>
            </div>
        </div>
    </section>

    <section class="aboutgrey">
        <div class="container service-bg service-body">
            <div class="row">
                
                <div class="col-md-6 col-sm-6 pad-left">
                    <img class="logo-default" src="../../../../../images/app/about/aboutimg4.png" alt="Logo">
                </div>

                <div class="col-md-6 col-sm-6 pad-right pad-top service-desc">
                    <h1>Languages</h1>
                    <p>Maecenas congue tortor luctus neque placerat, vestibulum suscipit turpis vulputate. Proin nec lorem molestie, sagittis dui et, aliquam leo. Vestibulum risus diam, malesuada efficitur malesuada.</p>

                    <a href="#">read more <i class="fa fa-long-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </section>

    <a href="#intro" class="go2top"><i class="fa fa-arrow-up"></i></a>
@endsection

@section('footerheadbanner')
    <h1>WE SEARCH GREAT PERSON</h1><a href="">JOIN OUR TEAM</a>
@stop

@section('buttom_scripts')

@stop