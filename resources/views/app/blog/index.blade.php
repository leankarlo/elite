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
                <div class="titleheader-body titleheader-desc md-margin-bottom-30">
                    <h1>BLOGS/NEWS</h1>
                </div>
                <div class="titleheader-body">
                    <div class="titleheader-body">
                        <div class="form-group">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="input" class="form-control input-circle-left" placeholder="SEARCH">
                                    <span class="input-group-addon input-circle-right">
                                    <i class="icon-magnifier"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE HEADER END -->

    <a href="#intro" class="go2top"><i class="fa fa-arrow-up"></i></a>
@endsection

@section('footerheadbanner')
    <h1>GOT A PROJECT? TALK WITH US</h1><a href="">CONTACT US</a>
@stop

@section('buttom_scripts')

@stop