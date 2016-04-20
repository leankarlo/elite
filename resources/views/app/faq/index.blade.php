@extends('app.layouts.base_layout2')

@section('title')
	<title>{{ Config::get('app.clientapp') }}</title>
@stop

@section('head')

@stop


@section('content')
	
    <!-- PAGE HEADER BEGIN -->
    <div class="titleheader margin-bottom-60">
        <div class="container header">
            <div class="titl-wrap">
                <div class="titleheader-body titleheader-desc md-margin-bottom-30">
                    <h1>FREQUENTLY ASKED QUESTIONS</h1>
                </div>
                <div class="titleheader-body">
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE HEADER END -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="col-md-2 col-sm-2"></div>
                    <div class="col-md-10 col-sm-10">
                        <div class="accordion" id="accordion3">
                            <div class="panel margin-buttom-30">
                                <div class="">
                                    <h4 class="panel-title">
                                    <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_1">
                                    Collapsible Group Item #1 <i class="fa fa-chevron-right" style="float: right;"></i></a>
                                    </h4>
                                </div>
                                <div id="collapse_3_1" class="panel-collapse in">
                                    <div class="panel-body">
                                        <p>
                                             Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
                                        </p>
                                        <p>
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel margin-buttom-30">
                                <div class="">
                                    <h4 class="panel-title">
                                    <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_2">
                                    Collapsible Group Item #2 <i class="fa fa-chevron-right" style="float: right;"></i></a>
                                    </h4>
                                </div>
                                <div id="collapse_3_2" class="panel-collapse collapse">
                                    <div class="panel-body" style="height:200px; overflow-y:auto;">
                                        <p>
                                             Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
                                        </p>
                                        <p>
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </p>
                                        <p>
                                             Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
                                        </p>
                                        <p>
                                            <a class="btn blue" href="ui_tabs_accordions_navs.html#collapse_3_2" target="_blank">
                                            Activate this section via URL </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel margin-buttom-30">
                                <div class="">
                                    <h4 class="panel-title">
                                    <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_3">
                                    Collapsible Group Item #3 <i class="fa fa-chevron-right" style="float: right;"></i></a>
                                    </h4>
                                </div>
                                <div id="collapse_3_3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                        </p>
                                        <p>
                                             Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
                                        </p>
                                        <p>
                                            <a class="btn green" href="ui_tabs_accordions_navs.html#collapse_3_3" target="_blank">
                                            Activate this section via URL </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel margin-buttom-30">
                                <div class="">
                                    <h4 class="panel-title">
                                    <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_4">
                                    Collapsible Group Item #4  <i class="fa fa-chevron-right" style="float: right;"></i></a>
                                    </h4>
                                </div>
                                <div id="collapse_3_4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                             Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
                                        </p>
                                        <p>
                                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                        </p>
                                        <p>
                                             Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
                                        </p>
                                        <p>
                                            <a class="btn red" href="ui_tabs_accordions_navs.html#collapse_3_4" target="_blank">
                                            Activate this section via URL </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">

                    <div class="panel-group accordion" id="accordion1">
                        <div class="panel panel-sidebar">
                            <div class="panel-heading2">
                                <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1">
                                Get A Demo <i class="fa fa-desktop" style="float: right;"></i></a>
                                </h4>
                            </div>
                            <div id="collapse_1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                         Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
                                    </p>
                                    <p>
                                         Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-sidebar">
                            <div class="panel-heading2">
                                <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_2">
                                Brochure <i class="fa fa-file-pdf-o" style="float: right;"></i></a>
                                </h4>
                            </div>
                            <div id="collapse_2" class="panel-collapse in">
                                <div class="panel-body" style="height:200px; overflow-y:auto;">
                                    <h4>
                                         Do you need Help?
                                    </h4>
                                    <ul style="list-style-type: none;">
                                        <li>
                                            <p><i class="icon-call-end"></i> +64 9751046</p>
                                        </li>
                                        <li>
                                            <p><i class="icon-envelope-letter"></i> info@emailaddress.com</p>
                                        </li>
                                        <li>
                                            <p><i class="icon-bubble"></i> Live Chat</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

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

@stop