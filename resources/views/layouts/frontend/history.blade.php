@include('layouts.frontend.fhead')
<body class="smoothscroll enable-animation">

<!-- SLIDE TOP -->

<!-- /SLIDE TOP -->

<!-- WRAPPER -->
<div id="wrapper">

    <!-- Top Bar -->
    <div id="topBar">
        <div class="container">

            <!-- right -->
            <ul class="top-links list-inline pull-right">
                <li>

                    <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#">MY ACCOUNT</a>
                    <ul class="dropdown-menu pull-right">

                        <li><a tabindex="-1" href="#"><i class="fa fa-cog"></i> SETTINGS</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="#"><i class="glyphicon glyphicon-off"></i> LOGOUT</a></li>
                    </ul>

                </li>
                <li><a href="{{route('Auth_login')}}">LOGIN</a></li>
            </ul>

            <!-- left -->


        </div>
    </div>
    <!-- /Top Bar -->

    <!-- TOP BAR -->
    <div class="text-center padding-5" id="top">
        <!-- LOGO -->
        <a class="logo" href="index.html"><img alt="" src="{{asset('assetsh/images/logo_dark.png')}}"></a>
    </div>
    <!-- /TOP BAR -->

    <!-- STICKY HEADER -->
    <div class="sticky header-sm clearfix" id="header">
        <!-- TOP NAV -->
        <header id="topNav">
            <div class="container">
                <!-- MOBILE MENU BAR -->
                <button class="btn btn-mobile" data-target=".nav-main-collapse" data-toggle="collapse"><i class="fa fa-bars"></i></button>
                <!-- BUTTONS -->
                <ul class="pull-right nav nav-pills nav-second-main">
                    <!-- SEARCH -->
                    <li class="search">
                        <a href="javascript:;"><i class="fa fa-search"></i></a>
                        <div class="search-box">
                            <form action="" method="get">
                                <div class="input-group">
                                    <input class="form-control" name="src" placeholder="Search" type="text"> <span class="input-group-btn"><button class="btn btn-primary" type="submit"><span class="input-group-btn"><span class="input-group-btn"><span class="input-group-btn">Search</span></span></span></button></span>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- /SEARCH -->
                </ul>
                <!-- /BUTTONS -->

                <!-- NAVBAR START -->
@include('layouts.frontend.fnavbar')
    <section class="page-header page-header-xs">
        <div class="container">
            <div class="col-md-12">
                <h1>HISTORY</h1>
                <!-- breadcrumbs -->
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li class="active">Page Title</li>
                </ol>
                <!-- /breadcrumbs -->
            </div>
        </div>
    </section>

    <section style="padding: 30px 0;">
        <div class="container">
            <div class="col-md-3 pull-left">

                <!-- CATEGORIES -->
                <div class="side-nav margin-bottom-60">

                    <ul class="list-group list-group-bordered list-group-noicon uppercase">
                        <li class="list-group-item active "><a href="history.html"><span class="size-11 text-muted pull-right"></span> History</a></li>
                        <li class="list-group-item "><a href="our_message.html"><span class="size-11 text-muted pull-right"></span> our message</a></li>
                        <li class="list-group-item"><a href="mission_vission.html"><span class="size-11 text-muted pull-right"></span> mission & vission</a></li>

                    </ul>

                </div>
                <!-- /CATEGORIES -->
            </div>

            <!-- CONTENT AREA -->
            <div class="col-md-9">
                <div class="box-light"><!-- .box-light OR .box-dark -->

                    <div class="box-inner">

                        <div class="timeline"><!-- .timeline-inverse = right position [left on RTL] -->

                            <!-- ITEM -->
                            <div class="timeline-item timeline-item-bordered">
                                <!-- timeline entry -->
                                <div class="timeline-entry rounded"><!-- .rounded = entry -->
                                    15<span>Jun</span>
                                    <div class="timeline-vline"><!-- vertical line --></div>
                                </div>
                                <!-- /timeline entry -->

                                <h2 class="uppercase">EPONA - RESPONSIVE TEMPLATE RELEASED</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>

                            </div>
                            <!-- /ITEM -->

                            <!-- ITEM -->
                            <div class="timeline-item timeline-item-bordered">
                                <!-- timeline entry -->
                                <div class="timeline-entry rounded"><!-- .rounded = entry -->
                                    09<span>Jun</span>
                                    <div class="timeline-vline"><!-- vertical line --></div>
                                </div>
                                <!-- /timeline entry -->

                                <h2 class="uppercase">ATROPOS - MULTIPURPOSE TEMPLATE RELEASED</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>

                            </div>
                            <!-- /ITEM -->

                            <!-- ITEM -->
                            <div class="timeline-item timeline-item-bordered">
                                <!-- timeline entry -->
                                <div class="timeline-entry rounded"><!-- .rounded = entry -->
                                    21<span>Jun</span>
                                    <div class="timeline-vline"><!-- vertical line --></div>
                                </div>
                                <!-- /timeline entry -->

                                <h2 class="uppercase">ISISONE - ONEPAGE TEMPLATE RELEASED</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>

                            </div>
                            <!-- /ITEM -->

                            <!-- ITEM -->
                            <div class="timeline-item timeline-item-bordered">
                                <!-- timeline entry -->
                                <div class="timeline-entry rounded"><!-- .rounded = entry -->
                                    18<span>Jun</span>
                                    <div class="timeline-vline"><!-- vertical line --></div>
                                </div>
                                <!-- /timeline entry -->

                                <h2 class="uppercase">DEUSONE - ONEPAGE TEMPLATE RELEASED</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>

                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <img class="img-responsive" src="assets/images/demo/wb/WB0271X52-min.png" alt="image" />
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <img class="img-responsive" src="assets/images/demo/wb/WB0PNJ9B6-min.png" alt="image" />
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <img class="img-responsive" src="assets/images/demo/wb/WB05SR527-min.png" alt="image" />
                                    </div>
                                </div>
                            </div>
                            <!-- /ITEM -->


                        </div>

                    </div>

                </div>
            </div>
            <!-- /CONTENT AREA -->
        </div>
    </section>

    <!-- FOOTER -->

    <!-- /FOOTER -->
 </div>
@include('layouts.frontend.footer')
<!-- /Wrapper -->





<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>

<!-- PRELOADER -->
<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div>
<!-- /PRELOADER -->

<!-- JAVASCRIPT FILES -->
@include('layouts.frontend.javascript')
</body>
</html>