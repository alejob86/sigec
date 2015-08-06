<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="slick, flat, dashboard, bootstrap, admin, template, theme, responsive, fluid, retina">
    <link rel="shortcut icon" href="javascript:;" type="image/png">

    <title>{{ trans('app.title') }}</title>

    <!--right slidebar-->
    <link href="{{ URL::to('css/slidebars.css') }}" rel="stylesheet">

    <!--switchery-->
    <link href="{{ URL::to('js/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css" media="screen" />

    <!--common style-->
    <link href="{{ URL::to('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/style-responsive.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="sticky-header">

    <section>
        <!-- sidebar left start-->
        <div class="sidebar-left">
            <!--responsive view logo start-->
            <div class="logo dark-logo-bg visible-xs-* visible-sm-*">
                <a href="/">
                    <img src="{{ URL::to('img/logo-icon.png') }}" alt="">
                    <!--<i class="fa fa-maxcdn"></i>-->
                    <span class="brand-name">{{ trans('app.title') }}</span>
                </a>
            </div>
            <!--responsive view logo end-->

            <div class="sidebar-left-info">
                <!-- visible small devices start-->
                <div class=" search-field">  </div>
                <!-- visible small devices end-->

                <!--sidebar nav start-->
                <ul class="nav nav-pills nav-stacked side-navigation">
                    <li>
                        <h3 class="navigation-title">{{ trans('app.navigation') }}</h3>
                    </li>
                    <li><a href="/"><i class="fa fa-home"></i> <span>{{ trans('app.dashboard') }}</span></a></li>
                    <li class="menu-list nav-active">
                        <a href=""><i class="fa fa-users"></i>  <span>{{ trans('module.people') }}</span></a>
                        <ul class="child-list">
                            <li><a href="people/list"> {{ trans('people.list') }} </a></li>           
                        </ul>
                    </li>                    

                </ul>
                <!--sidebar nav end-->

            </div>
        </div>
        <!-- sidebar left end-->

        <!-- body content start-->
        <div class="body-content" style="min-height: 1200px;">

            <!-- header section start-->
            <div class="header-section">

                <!--logo and logo icon start-->
                <div class="logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="/">
                        <img src="{{ URL::to('img/logo-icon.png') }}" alt="">
                        <!--<i class="fa fa-maxcdn"></i>-->
                        <span class="brand-name">SlickLab</span>
                    </a>
                </div>

                <div class="icon-logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="/">
                        <img src="img/logo-icon.png" alt="">
                        <!--<i class="fa fa-maxcdn"></i>-->
                    </a>
                </div>
                <!--logo and logo icon end-->

                <!--toggle button start-->
                <a class="toggle-btn"><i class="fa fa-outdent"></i></a>
                <!--toggle button end-->

                <!--mega menu start-->
                <div id="navbar-collapse-1" class="navbar-collapse collapse yamm mega-menu">
                    <ul class="nav navbar-nav">
                        <!-- Classic list -->
                        <li class="dropdown"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle">Mega <b
                                class=" fa fa-angle-down"></b></a>
                            <ul class="dropdown-menu wide-full">
                                <li>
                                    <!-- Content container to add padding -->
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-sm-2 list-unstyled">
                                                <li>
                                                    <p class="title">{{ trans("module.module") }}</p>
                                                </li>
                                                <li>
                                                	<a href="javascript:;"> {{ trans("module.people") }}</a>
                                                </li>                                                
                                            </ul>                                            
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <!-- Classic dropdown -->
                        <li class="dropdown"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle"> 
                                <img src="{{URL::to('img/flags/usa_flag.jpg')}}" alt=""/> {{ App::getLocale() }} <b
                                class=" fa fa-angle-down"></b></a>
                            <ul role="menu" class="dropdown-menu language-switch">
                                <li>
                                    <a tabindex="-1" href="javascript:;"><span> English </span><img src="{{URL::to('img/flags/usa_flag.jpg')}}" alt=""/></a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:;"><span> Spanish </span> <img src="{{URL::to('img/flags/spain_flag.jpg')}}" alt=""/></a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:;"><span> Portugués </span> <img src="{{URL::to('img/flags/brazil_flag.jpg')}}" alt=""/></a>
                                </li>                                
                            </ul>
                        </li>

                    </ul>
                </div>
                <!--mega menu end-->
                <div class="notification-wrap">


                <!--right notification start-->
                <div class="right-notification">
                    <ul class="notification-menu">
                        

                        <li>
                            <a href="javascript:;" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                {{ Auth::user()->name }}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu purple pull-right">                                
                                <li><a href="auth/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="sb-toggle-right">
                                <i class="fa fa-indent"></i>
                            </div>
                        </li>

                    </ul>
                </div>
                <!--right notification end-->
                </div>

            </div>
            <!-- header section end-->

            <!-- page head start-->
            <div class="page-head">
                <h3>
                    Dashboard
                </h3>
                <span class="sub-title">Welcome to SlickLab dashboard</span>
                <div class="state-information">
                    <div class="state-graph">
                        <div id="balance" class="chart"></div>
                        <div class="info">Balance $ 2,317</div>
                    </div>
                    <div class="state-graph">
                        <div id="item-sold" class="chart"></div>
                        <div class="info">Item Sold 1230</div>
                    </div>
                </div>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">

                @yield('content')

            </div>
            <!--body wrapper end-->


            <!--footer section start-->
            <footer>
                2015 &copy; SlickLab by VectorLab.
            </footer>
            <!--footer section end-->

        </div>
        <!-- body content end-->
    </section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{ URL::to('js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ URL::to('js/jquery-migrate.js') }}"></script>
<script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::to('js/modernizr.min.js') }}"></script>

<!--Nice Scroll-->
<script src="{{ URL::to('js/jquery.nicescroll.js') }}" type="text/javascript"></script>

<!--right slidebar-->
<script src="{{ URL::to('js/slidebars.min.js') }}"></script>

<!--switchery-->
<script src="{{ URL::to('js/switchery/switchery.min.js') }}"></script>
<script src="{{ URL::to('js/switchery/switchery-init.js') }}"></script>

<!--Sparkline Chart-->
<script src="{{ URL::to('js/sparkline/jquery.sparkline.js') }}"></script>
<script src="{{ URL::to('js/sparkline/sparkline-init.js') }}"></script>


<!--common scripts for all pages-->
<script src="{{ URL::to('js/scripts.js') }}"></script>


</body>
</html>