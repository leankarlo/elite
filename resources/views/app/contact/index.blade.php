@extends('app.layouts.base_layout2')

@section('title')
	<title>{{ Config::get('app.clientapp') }}</title>
@stop

@section('head')

@stop


@section('content')
	
    <!-- PAGE HEADER BEGIN -->
    <div class="row">
        <div class="container">
            <div id="map" class="gmaps margin-bottom-40" style="height:400px;">
            </div>
        </div>
    </div>
    <!-- PAGE HEADER END -->

    <section class="about-cont">
        <div class="container">
            <div class="row margin-bottom-40">
                <div class="col-md-6 col-sm-6">
                    <!-- BEGIN FORM-->
                    <form action="#" role="form">
                        <div class="form-group">
                            <label for="contacts-name">Request Qoute For *</label>
                            <input type="text" class="form-control" id="contacts-name">
                        </div>
                        <div class="form-group">
                            <label for="contacts-email">Comapany Name *</label>
                            <input type="email" class="form-control" id="contacts-email">
                        </div>
                        <div class="form-group">
                            <label for="contacts-message">Mobile/Direct Line *</label>
                            <input type="email" class="form-control" id="contacts-email">
                        </div>
                        <div class="form-group">
                            <label for="contacts-email">Email *</label>
                            <input type="email" class="form-control" id="contacts-email">
                        </div>
                        <button type="submit" class="btn btn-danger"><i class="icon-ok"></i> Send</button>
                        <button type="button" class="btn btn-default">Cancel</button>
                    </form>
                    <!-- END FORM-->
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- BEGIN FORM-->
                    <form action="#" role="form">
                        <div class="form-group">
                            <label for="contacts-name">Request</label>
                            <span for="contacts-name">(Please Indicate Language Pair)</span>
                            <input type="text" class="form-control" id="contacts-name">
                        </div>
                        <div class="form-group">
                            <label for="contacts-email">Target Due Date</label>
                            <input type="email" class="form-control" id="contacts-email">
                        </div>
                        <div class="form-group">
                            <label for="contacts-message">Attach a File</label>
                            <input type="email" class="form-control" id="contacts-email">
                        </div>
                        <div class="form-group">
                            <label for="contacts-message">Attach a File</label>
                            <textarea class="form-control" rows="5" id="contacts-message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger"><i class="icon-ok"></i> Send</button>
                        <button type="button" class="btn btn-default">Cancel</button>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
        </div>
    </section>

    <a href="#intro" class="go2top"><i class="fa fa-arrow-up"></i></a>
@endsection

@section('footerheadbanner')
    <h1>GOT A PROJECT? TALK WITH US</h1><a href="">CONTACT US</a>
@stop

@section('buttom_scripts')
    <script src="{{ asset('/packages/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
    <script src="{{ asset('/packages/gmaps/gmaps.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app/pages/contactus.js') }}" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function() {    
            ContactUs.init();
        });
    </script>
    
@stop