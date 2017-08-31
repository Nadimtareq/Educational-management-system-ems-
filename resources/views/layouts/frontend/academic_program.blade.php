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
                <h1>ACADEMIC PROGRAMS</h1>
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
                        <li class="list-group-item active "><a href="academic_program.html"><span class="size-11 text-muted pull-right"></span> Academic Programs</a></li>
                        <li class="list-group-item "><a href="code_of_conducts.html"><span class="size-11 text-muted pull-right"></span> Code of Conducts</a></li>
                        <li class="list-group-item "><a href="dress_code.html"><span class="size-11 text-muted pull-right"></span>Dress Code</a></li>
                        <li class="list-group-item "><a href="academic_facilities.html"><span class="size-11 text-muted pull-right"></span>Facilities</a></li>
                        <li class="list-group-item "><a href="residents.html"><span class="size-11 text-muted pull-right"></span> Residents</a></li>
                        <li class="list-group-item "><a href="transports.html"><span class="size-11 text-muted pull-right"></span> Transports</a></li>
                        <li class="list-group-item">
                            <a class="dropdown-toggle" href="#">Drop Down</a>
                            <ul>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(88)</span> Shoes &amp; Boots</a></li>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(22)</span> Dresses &amp; Skirts</a></li>
                                <li><a href="#"><span class="size-11 text-muted pull-right">(31)</span> Accessories</a></li>
                                <li class="active"><a href="#"><span class="size-11 text-muted pull-right">(18)</span> Top &amp; Blouses</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <!-- /CATEGORIES -->
            </div>

            <!-- CONTENT AREA -->
            <div class="col-md-9">
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