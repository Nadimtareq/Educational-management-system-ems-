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

                <!-- /BUTTONS -->

                <!-- NAVBAR START -->
                @include('layouts.frontend.fnavbar')

    <section class="page-header page-header-xs">
        <div class="container">
            <div class="col-md-12">
                <h1>EX-PRICIPLES</h1>
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
                        <li class="list-group-item  "><a href="academic_council.html"><span class="size-11 text-muted pull-right"></span> Academic Council</a></li>
                        <li class="list-group-item "><a href="organogram.html"><span class="size-11 text-muted pull-right"></span> Organogram</a></li>
                        <li class="list-group-item active"><a href="ex_principles.html"><span class="size-11 text-muted pull-right"></span> Ex-Principles</a></li>
                        <li class="list-group-item "><a href="employee_information.html"><span class="size-11 text-muted pull-right"></span>Employee Information</a></li>
                        <li class="list-group-item "><a href="career.html"><span class="size-11 text-muted pull-right"></span> Career</a></li>

                    </ul>

                </div>
                <!-- /CATEGORIES -->
            </div>

            <!-- CONTENT AREA -->
            <div class="col-md-9">
                <p class="dropcap">Aliquam fringilla, sapien eget scelerisque placerat, lorem libero cursus lorem, sed sodales lorem libero eu sapien. Nunc mattis feugiat justo vel faucibus. Nulla consequat feugiat malesuada. Ut justo nulla, <strong>facilisis vel molestie id</strong>, dictum ut arcu. Nunc ipsum nulla, eleifend non blandit quis, luctus quis orci. Cras blandit turpis mattis nulla ultrices interdum. Mauris pretium pretium dictum. Nunc commodo, felis sed dictum bibendum, risus justo iaculis dui, nec euismod orci sem eget neque. Donec in metus metus, vitae eleifend lorem. Ut vestibulum gravida venenatis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque suscipit tincidunt magna non mollis. Fusce tempus tincidunt nisi, in luctus elit pellentesque quis. Sed velit mi, ullamcorper ut tempor ut, mattis eu lacus. Morbi rhoncus aliquet tellus, id accumsan enim sollicitudin vitae.</p>
                <p>Vivamus <a href="#">magna justo</a>, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt.</p>
            </div>
            <!-- /CONTENT AREA -->
        </div>
    </section>

    <!-- FOOTER -->

    <!-- /FOOTER -->
</div>
<!-- /Wrapper -->
@include('layouts.frontend.footer')




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