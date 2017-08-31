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
                        <li><a tabindex="-1" href="#"><i class="fa fa-history"></i> ORDER HISTORY</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="#"><i class="fa fa-bookmark"></i> WISHLIST</a></li>
                        <li><a tabindex="-1" href="#"><i class="fa fa-cog"></i> SETTINGS</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="#"><i class="glyphicon glyphicon-off"></i> LOGOUT</a></li>
                    </ul>

                </li>
                <li><a href="">LOGIN</a></li>
            </ul>

            <!-- left -->


        </div>
    </div>
    <!-- /Top Bar -->

    <!-- TOP BAR -->
    <div class="text-center padding-5" id="top">
        <!-- LOGO -->
        <a class="logo" href="index.html"><img alt="" src="assets/images/logo_dark.png"></a>
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
                <h1>FORM DOWNLOAD SECTION</h1>
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
            <div class="row">

                <div class="col-md-12">
                    <div class="callout callout-theme-color">
                        <div class=""><!-- add here .container if needed for fullwidth -->
                            <div class="row">

                                <div class="col-md-9"><!-- title + shortdesc -->
                                    <h3>SCIENCE GROUP ADMISSION FORM</h3>
                                    <p>Click to Download now, including <strong>details process document paper</strong>!</p>
                                </div>

                                <div class="col-md-3 text-right"><!-- button -->
                                    <a href="#purchase" rel="nofollow" target="_blank" class="btn btn-primary btn-lg">Download Now</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section style="padding: 30px 0;">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="callout callout-theme-color">
                        <div class=""><!-- add here .container if needed for fullwidth -->
                            <div class="row">

                                <div class="col-md-9"><!-- title + shortdesc -->
                                    <h3>COMMERCE GROUP ADMISSION FORM</h3>
                                    <p>Click to Download now, including <strong>details process document paper</strong>!</p>
                                </div>

                                <div class="col-md-3 text-right"><!-- button -->
                                    <a href="#purchase" rel="nofollow" target="_blank" class="btn btn-primary btn-lg">Download Now</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section style="padding: 30px 0;">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="callout callout-theme-color">
                        <div class=""><!-- add here .container if needed for fullwidth -->
                            <div class="row">

                                <div class="col-md-9"><!-- title + shortdesc -->
                                    <h3>ARTS GROUP ADMISSION FORM</h3>
                                    <p>Click to Download now, including <strong>details process document paper</strong>!</p>
                                </div>

                                <div class="col-md-3 text-right"><!-- button -->
                                    <a href="#purchase" rel="nofollow" target="_blank" class="btn btn-primary btn-lg">Download Now</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
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