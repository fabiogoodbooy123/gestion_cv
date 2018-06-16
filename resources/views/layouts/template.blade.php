<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Create, maintain, publish, and share your CVs for free" />
        <meta name="keywords" content="create English resume, create العربية resume, create Español resume, create Français resume" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />

        <link rel="shortcut icon" href="{{asset('assets/images/favicon_1.ico')}}">


        <title>cv-generator</title>
        {!! HTML::style('../bower_components/summernote/dist/summernote.css') !!}
        <!--Morris Chart CSS -->

        {!! HTML::style('assets/plugins/morris/morris.css') !!}
        {!! HTML::style('assets/css/bootstrap.min.css') !!}
        {!! HTML::style('assets/css/core.css') !!}
        {{-- {!! HTML::style('assets/css/components.css') !!} --}}
        {!! HTML::style('assets/css/icons.css') !!}
        {!! HTML::style('assets/css/pages.css') !!}
        {!! HTML::style('assets/css/responsive.css') !!}

        <!--Footable-->
        {!! HTML::style('assets/plugins/footable/css/footable.core.css') !!}
        {!! HTML::style('assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css') !!}


        <!-- for modal fadeIn -->
        {!! HTML::style('assets/plugins/custombox/dist/custombox.min.css') !!}

        <!-- timePicker -->
        {!! HTML::style('assets/plugins/timepicker/bootstrap-timepicker.min.css') !!}


        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        {!! HTML::style('assets/assets/global/plugins/font-awesome/css/font-awesome.min.css') !!}
        {!! HTML::style('assets/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') !!}
        {{-- {!! HTML::style('assets/assets/global/plugins/bootstrap/css/bootstrap.min.css') !!} --}}
        {!! HTML::style('assets/assets/global/plugins/uniform/css/uniform.default.css') !!}
        {!! HTML::style('assets/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') !!}
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        {!! HTML::style('assets/assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') !!}
        {!! HTML::style('assets/assets/global/plugins/typeahead/typeahead.css') !!}
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        {!! HTML::style('assets/assets/global/plugins/icheck/skins/all.css') !!}
        <!-- END PAGE LEVEL PLUGINS -->
        
        <!-- BEGIN PAGE LEVEL PLUGINS -->
{!! HTML::style('assets/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') !!}
{!! HTML::style('assets/assets/global/plugins/fancybox/source/jquery.fancybox.css') !!}
<!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL STYLES -->
        {!! HTML::style('assets/assets/global/css/components.min.css') !!}
        {!! HTML::style('assets/assets/global/css/plugins.min.css') !!}
        <!-- END THEME GLOBAL STYLES -->
        
        <!-- BEGIN PAGE LEVEL STYLES -->
        {!! HTML::style('assets/assets/pages/css/search.min.css') !!}
        <!-- END PAGE LEVEL STYLES -->
        
        <!-- BEGIN THEME LAYOUT STYLES -->
        {!! HTML::style('assets/assets/layouts/layout/css/layout.min.css') !!}
        {!! HTML::style('assets/assets/layouts/layout/css/themes/light2.min.css') !!}
        {!! HTML::style('assets/assets/layouts/layout/css/custom.min.css') !!}
        <!-- END THEME LAYOUT STYLES -->

        <link rel="shortcut icon" href="http://localhost/projet-cv/public/assets/favicon.ico" /> </head>

    {!! HTML::script('assets/js/modernizr.min.js') !!}

    @yield('cv')


</head>


<body class="fixed-left" ng-app="Cv">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="{{ url('/user')}}" class="logo"><i class="icon-c-logo">CvG</i><span>CV-generator</span></a>
                </div>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">
                        <div class="pull-left">
                            <button class="button-menu-mobile open-left">
                                <i class="ion-navicon"></i>
                            </button>
                            <span class="clearfix"></span>
                        </div>
<!--                         <div id="bar">
                                         <div class="language">
                                                                    <select id="language">
                                                                                    <option value="en" class="en">English</option>
                                                                                    <option value="ar" class="ar">العربية</option>
                                                                                    <option value="es" class="es">Español</option>
                                                                                    <option value="fr" class="fr">Français</option>
                                                                    </select>
                                                            </div>
                                    </div>
                        -->

                        <ul class="nav navbar-nav navbar-right pull-right">          
                            @if (Auth::guest())
                            <li><a href="{{ url('/login')}}">Login</a></li>
                            <li><a href="{{ url('/register')}}">Register</a></li>
                            @else
                            
                            <li class="hidden-xs">
                                <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                            </li>
<!--                            <li class="hidden-xs">
                                <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="icon-settings"></i></a>
                            </li>-->


                            <li class="dropdown">
                                <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true">
                                    <img src="{{asset('../storage/uploads').'/'.Auth::user()->etudiant->photo}}" alt="user-img" class="img-circle">
                                    {{-- < img src = "{{asset('assets/images/').'/'.$imgsrc}}"> --}}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/etudiant')}}"><i class="ti-user m-r-5"></i> {{ Auth::user()->name }}</a></li>
                                    <!--<li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>-->
                                    <!--<li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>-->
                                    <li><a href="{{ url('/logout')}}"><i class="ti-power-off m-r-5"></i>Logout</a></li>
                                </ul>

                            </li>

                            @endif

                        </ul>

                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        @if (Auth::guest())

        @else
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>

                        <li class="text-muted menu-title">Menu</li>
                        @if(Auth::user()->admin)
                        <li>
                            <a href="{{ URL::route('admin') }}" class="waves-effect">
                                <i class="ti-home"></i>
                                <span> Accueil </span> </a>
                        </li>

                        <li>
                            <a href="{{ URL::route('listecv') }}" class="waves-effect">
                                <i class="ti-pencil-alt"></i>
                                <span> Liste de CV's </span> </a>
                        </li>

                        @else
                        <li>
                            <a href="{{ URL::route('etudiant') }}" class="waves-effect">
                                <i class="ti-home"></i>
                                <span> Accueil </span> </a>
                        </li>



                        <li>
                            <a href="{{ URL::route('cv') }}" class="waves-effect">
                                <i class="ti-menu-alt"></i>
                                <span> Mes CVs </span> </a>

                            @endif


                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        @endif

        <!-- Left Sidebar End -->




        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <!-- Page-Title -->
                    <!-- <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-primary" id="panelBody">
                    -->
                    @yield('contenu')

                    @if (!Auth::guest())

                    <div id="custom-modal-CreateCV" class="modal fade" data-width="780" tabindex="-1" data-backdrop="static" data-keyboard="false">
                        <form class="form-horizontal" method="post" action="{{ url('/etudiant/cv/create')}}"> 
                            <div class="modal-header">                                                                      

                                <h4 class="custom-modal-title">Création d'un nouveau cv</h4>
                            </div>
                            <div class="modal-body">

                                {{ csrf_field()}}
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input type="text" class="form-control" name="nom_cv" placeholder="entrez un nom pour votre cv">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input type="hidden" name="etudiant_id" value="{{Auth::user()->etudiant_id}}">

                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer"> 
                                <button type="button" data-dismiss="modal" class="btn btn-default waves-effect" >Annuler</button> 
                                <button class="btn btn-info waves-effect waves-light" type="submit">envoyer</button>
                            </div>
                        </form>
                    </div><!-- /.modal -->
                    @endif  
                    <!-- 
                                                    </div>
                    
                                                </div -->

                </div>
            </div>
        </div>
    </div>
</div>


<script>
            var resizefunc = [];
</script>
<!-- jQuery  -->


{!! HTML::script('assets/assets/global/plugins/jquery.min.js') !!}
{!! HTML::script('assets/assets/global/plugins/bootstrap/js/bootstrap.min.js') !!}

{!! HTML::script('assets/js/detect.js') !!}
{!! HTML::script('assets/js/fastclick.js') !!}
{!! HTML::script('assets/js/jquery.slimscroll.js') !!}
{!! HTML::script('assets/js/jquery.blockUI.js') !!}
{!! HTML::script('assets/js/waves.js') !!}
{!! HTML::script('assets/js/wow.min.js') !!}
{!! HTML::script('assets/js/jquery.nicescroll.js') !!}
{!! HTML::script('assets/js/jquery.scrollTo.min.js') !!}

{!! HTML::script('assets/plugins/peity/jquery.peity.min.js') !!}

<!-- jQuery  -->
{!! HTML::script('assets/plugins/waypoints/lib/jquery.waypoints.js') !!}
{!! HTML::script('assets/plugins/counterup/jquery.counterup.min.js') !!}

{!! HTML::script('assets/plugins/morris/morris.min.js') !!}
{!! HTML::script('assets/plugins/raphael/raphael-min.js') !!}

{!! HTML::script('assets/plugins/jquery-knob/jquery.knob.js') !!}

{{-- {!! HTML::script('assets/pages/jquery.dashboard.js') !!} --}}

{!! HTML::script('assets/js/jquery.core.js') !!}
{!! HTML::script('assets/js/jquery.app.js') !!}

<!-- For Maxlength input -->
{!! HTML::script('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') !!}

<!-- Modal-Effect -->
{!! HTML::script('assets/plugins/custombox/dist/custombox.min.js') !!}
{!! HTML::script('assets/plugins/custombox/dist/legacy.min.js') !!}

<!--FooTable-->
{!! HTML::script('assets/plugins/footable/js/footable.all.min.js') !!}
{!! HTML::script('assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js') !!}

<!--FooTable Example-->
{!! HTML::script('assets/pages/jquery.footable.js') !!}

<!-- InputMask -->
{!! HTML::script('assets/plugins/input-mask/jquery.inputmask.js') !!}
{!! HTML::script('assets/plugins/input-mask/jquery.inputmask.date.extensions.js') !!}
{!! HTML::script('assets/plugins/input-mask/jquery.inputmask.extensions.js') !!}

<!--AngularJS-->

{!! HTML::script('AngularJS/angular.min.js') !!}
{!! HTML::script('AngularJS/angular-resource.min.js') !!}
{!! HTML::script('AngularJS/angular-route.min.js') !!}
{!! HTML::script('AngularJS/angular-animate.min.js') !!}
{!! HTML::script('AngularJS/angular-sanitize.min.js') !!}
<!--summernote-->
{!! HTML::script('../bower_components/summernote/dist/summernote.js') !!}
{!! HTML::script('../bower_components/summernote/lang/summernote-fr-FR.js') !!}
{!! HTML::script('../bower_components/angular-summernote/dist/angular-summernote.js') !!}


<!-- activate ng upload file -->
{!! HTML::script('ng-file-upload/ng-file-upload-shim.min.js') !!} <!-- for no html5 browsers support -->
{!! HTML::script('ng-file-upload/ng-file-upload.min.js') !!}

{!! HTML::script('AngularScripts/app.js') !!}
{!! HTML::script('AngularScripts/controllers/infoBasicController.js') !!}
{!! HTML::script('AngularScripts/controllers/experienceController.js') !!}
{!! HTML::script('AngularScripts/controllers/formationController.js') !!}
{!! HTML::script('AngularScripts/controllers/competenceController.js') !!}
{!! HTML::script('AngularScripts/controllers/langueController.js') !!}
{!! HTML::script('AngularScripts/controllers/loisirController.js') !!}
{!! HTML::script('AngularScripts/controllers/dirPagination.js') !!}


<!-- BEGIN CORE PLUGINS -->
{!! HTML::script('assets/assets/global/plugins/js.cookie.min.js') !!}
{!! HTML::script('assets/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') !!}
{!! HTML::script('assets/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') !!}
{!! HTML::script('assets/assets/global/plugins/jquery.blockui.min.js') !!}
{!! HTML::script('assets/assets/global/plugins/uniform/jquery.uniform.min.js') !!}
{!! HTML::script('assets/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') !!}
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
{!! HTML::script('assets/assets/global/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js') !!}
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
{!! HTML::script('assets/assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') !!}
{!! HTML::script('assets/assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js') !!}
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
{!! HTML::script('assets/assets/pages/scripts/ui-extended-modals.min.js') !!}
<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
{!! HTML::script('assets/assets/global/plugins/jquery-validation/js/jquery.validate.min.js') !!}
{!! HTML::script('assets/assets/global/plugins/jquery-validation/js/additional-methods.min.js') !!}
{!! HTML::script('assets/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}
<!-- END PAGE LEVEL SCRIPTS -->


<!-- BEGIN PAGE LEVEL PLUGINS -->
{!! HTML::script('assets/assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') !!}
{!! HTML::script('assets/assets/global/plugins/typeahead/handlebars.min.js') !!}
{!! HTML::script('assets/assets/global/plugins/typeahead/typeahead.bundle.min.js') !!}
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
{!! HTML::script('assets/assets/global/plugins/amcharts/amcharts/amcharts.js') !!}
{!! HTML::script('assets/assets/global/plugins/amcharts/amcharts/serial.js') !!}
{!! HTML::script('assets/assets/global/plugins/amcharts/amcharts/pie.js') !!}
{!! HTML::script('assets/assets/global/plugins/amcharts/amcharts/radar.js') !!}
{!! HTML::script('assets/assets/global/plugins/amcharts/amcharts/themes/light.js') !!}
{!! HTML::script('assets/assets/global/plugins/amcharts/amcharts/themes/patterns.js') !!}
{!! HTML::script('assets/assets/global/plugins/amcharts/amcharts/themes/chalk.js') !!}
{!! HTML::script('assets/assets/global/plugins/amcharts/amcharts/themes/dark.js') !!}
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
{!! HTML::script('assets/assets/global/plugins/jquery-ui/jquery-ui.min.js') !!}
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
{!! HTML::script('assets/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}
{!! HTML::script('assets/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js') !!}
        <!-- END PAGE LEVEL PLUGINS -->
@yield('scriptsBefore')
<!-- BEGIN THEME GLOBAL SCRIPTS -->
{!! HTML::script('assets/assets/global/scripts/app.min.js') !!}

<!-- BEGIN PAGE LEVEL SCRIPTS -->
{!! HTML::script('assets/assets/pages/scripts/search.min.js') !!}
        <!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
{!! HTML::script('assets/assets/pages/scripts/portlet-draggable.min.js') !!}
<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
{!! HTML::script('AngularScripts/controllers/statisticController.js') !!}
<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{-- {!! HTML::script('assets/assets/pages/scripts/components-bootstrap-tagsinput.min.js')  !!} --}}
<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
{!! HTML::script('assets/assets/pages/scripts/form-validation.min.js') !!}
<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
{!! HTML::script('assets/assets/layouts/layout/scripts/layout.min.js') !!}
{!! HTML::script('assets/assets/layouts/layout/scripts/demo.min.js') !!}
{!! HTML::script('assets/assets/layouts/global/scripts/quick-sidebar.min.js') !!}
<!-- END THEME LAYOUT SCRIPTS -->

<!--
            <script type="text/javascript">
                jQuery(document).ready(function ($) {
                    $('.counter').counterUp({
                        delay: 100,
                        time: 1200
                    });
                    $(".knob").knob();
                });
            </script>
-->
<!--
        <script>
                    $(function () {
                    //Datemask dd/mm/yyyy
                    $("#datemask").inputmask("dd/mm/yyyy", { "placeholder": "dd/mm/yyyy" });
                            //Datemask2 mm/dd/yyyy
                            $("#datemask2").inputmask("mm/dd/yyyy", { "placeholder": "mm/dd/yyyy" });
                            //Money Euro
                            $("[data-mask]").inputmask();
                    });
        </script>-->
@yield('scriptsAfter')
</body>
</html>