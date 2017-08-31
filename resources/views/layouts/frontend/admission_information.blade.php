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
                <h1>ADMISSION INFORMATION</h1>
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
                <!-- LEFT -->
                <div class="col-md-6">

                    <div class="heading-title heading-border-bottom heading-color">
                        <h2 class="size-20">ADMISSION DETAILS & TUITION FEES</h2>
                    </div>

                    <div class="margin-bottom-80">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, natus voluptatibus adipisci porro magni dolore eos eius ducimus corporis quos perspiciatis quis iste, vitae autem libero ullam omnis cupiditate quam.</p>

                        <h5>REQUIREMENTS</h5>
                        <ul class="list-unstyled list-icons">
                            <li><i class="fa fa-check"></i> Computer Science &amp; Engineering </li>
                            <li><i class="fa fa-check"></i> 3+ years analytics experience</li>
                            <li><i class="fa fa-check"></i> 3+ years of Public Speaking experience</li>
                            <li><i class="fa fa-check"></i> Minimum of 4 live project roll outs.</li>
                            <li><i class="fa fa-check"></i> Good Communication Skills</li>
                            <li><i class="fa fa-check"></i> Team Player</li>
                            <li><i class="fa fa-check"></i> Computer Science &amp; Engineering </li>
                            <li><i class="fa fa-check"></i> 3+ years analytics experience</li>
                            <li><i class="fa fa-check"></i> 3+ years of Public Speaking experience</li>
                            <li><i class="fa fa-check"></i> Minimum of 4 live project roll outs.</li>
                            <li><i class="fa fa-check"></i> Good Communication Skills</li>
                            <li><i class="fa fa-check"></i> Team Player</li>
                            <li><i class="fa fa-check"></i> Computer Science &amp; Engineering </li>
                            <li><i class="fa fa-check"></i> 3+ years analytics experience</li>
                            <li><i class="fa fa-check"></i> 3+ years of Public Speaking experience</li>
                            <li><i class="fa fa-check"></i> Minimum of 4 live project roll outs.</li>
                            <li><i class="fa fa-check"></i> Good Communication Skills</li>
                            <li><i class="fa fa-check"></i> Team Player</li>
                        </ul>

                        <h5>WHAT WE EXPECT?</h5>
                        <ul class="list-unstyled list-icons">
                            <li><i class="fa fa-plus-square"></i> Lorem ipsum dolor sit amet</li>
                            <li><i class="fa fa-plus-square"></i> Nemo, natus voluptatibus adipisci porro</li>
                            <li><i class="fa fa-plus-square"></i> Dolore eos eius ducimus corporis</li>
                            <li><i class="fa fa-plus-square"></i> perspiciatis quis iste, vitae autem.</li>
                            <li><i class="fa fa-plus-square"></i> Autem libero ullam omnis cupiditate quam</li>
                            <li><i class="fa fa-plus-square"></i> Magni dolore eos eius ducimus corporis quos</li>
                            <li><i class="fa fa-plus-square"></i> Adipisci porro magni dolore eos</li>
                            <li><i class="fa fa-plus-square"></i> perspiciatis quis iste, vitae autem.</li>
                            <li><i class="fa fa-plus-square"></i> Autem libero ullam omnis cupiditate quam</li>
                            <li><i class="fa fa-plus-square"></i> Magni dolore eos eius ducimus corporis quos</li>
                            <li><i class="fa fa-plus-square"></i> Adipisci porro magni dolore eos</li>
                            <li><i class="fa fa-plus-square"></i> Lorem ipsum dolor sit amet</li>
                        </ul>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="heading-title heading-border-bottom heading-color">
                        <h2 class="size-20">ADMISSION PROCESS</h2>
                    </div>

                    <div class="margin-bottom-80">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, natus voluptatibus adipisci porro magni dolore eos eius ducimus corporis quos perspiciatis quis iste, vitae autem libero ullam omnis cupiditate quam.</p>

                        <h5>REQUIREMENTS</h5>
                        <ul class="list-unstyled list-icons">
                            <li><i class="fa fa-check"></i> Computer Science &amp; Engineering </li>
                            <li><i class="fa fa-check"></i> 3+ years analytics experience</li>
                            <li><i class="fa fa-check"></i> 3+ years of Public Speaking experience</li>
                            <li><i class="fa fa-check"></i> Minimum of 4 live project roll outs.</li>
                            <li><i class="fa fa-check"></i> Good Communication Skills</li>
                            <li><i class="fa fa-check"></i> Team Player</li>
                            <li><i class="fa fa-check"></i> Computer Science &amp; Engineering </li>
                            <li><i class="fa fa-check"></i> 3+ years analytics experience</li>
                            <li><i class="fa fa-check"></i> 3+ years of Public Speaking experience</li>
                            <li><i class="fa fa-check"></i> Minimum of 4 live project roll outs.</li>
                            <li><i class="fa fa-check"></i> Good Communication Skills</li>
                            <li><i class="fa fa-check"></i> Team Player</li>
                            <li><i class="fa fa-check"></i> Computer Science &amp; Engineering </li>
                            <li><i class="fa fa-check"></i> 3+ years analytics experience</li>
                            <li><i class="fa fa-check"></i> 3+ years of Public Speaking experience</li>
                            <li><i class="fa fa-check"></i> Minimum of 4 live project roll outs.</li>
                            <li><i class="fa fa-check"></i> Good Communication Skills</li>
                            <li><i class="fa fa-check"></i> Team Player</li>
                        </ul>

                        <h5>WHAT WE EXPECT?</h5>
                        <ul class="list-unstyled list-icons">
                            <li><i class="fa fa-plus-square"></i> Lorem ipsum dolor sit amet</li>
                            <li><i class="fa fa-plus-square"></i> Nemo, natus voluptatibus adipisci porro</li>
                            <li><i class="fa fa-plus-square"></i> Dolore eos eius ducimus corporis</li>
                            <li><i class="fa fa-plus-square"></i> perspiciatis quis iste, vitae autem.</li>
                            <li><i class="fa fa-plus-square"></i> Autem libero ullam omnis cupiditate quam</li>
                            <li><i class="fa fa-plus-square"></i> Magni dolore eos eius ducimus corporis quos</li>
                            <li><i class="fa fa-plus-square"></i> Adipisci porro magni dolore eos</li>
                            <li><i class="fa fa-plus-square"></i> perspiciatis quis iste, vitae autem.</li>
                            <li><i class="fa fa-plus-square"></i> Autem libero ullam omnis cupiditate quam</li>
                            <li><i class="fa fa-plus-square"></i> Magni dolore eos eius ducimus corporis quos</li>
                            <li><i class="fa fa-plus-square"></i> Adipisci porro magni dolore eos</li>
                            <li><i class="fa fa-plus-square"></i> Lorem ipsum dolor sit amet</li>
                        </ul>
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