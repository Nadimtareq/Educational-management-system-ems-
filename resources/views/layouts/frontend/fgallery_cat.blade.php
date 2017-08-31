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
    @include('layouts.frontend.fnavbar')

    <section class="page-header page-header-xs">
        <div class="container">
            <div class="col-md-12">
                <h1>GALLERY</h1>
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

            <div class="col-md-3">
                <!-- CATEGORIES -->

                    <div class="side-nav margin-bottom-60">
                        <ul class="list-group list-group-bordered list-group-noicon ">
                            @foreach($gallerycat as $value)
                            <li class="list-group-item active"><a href="{{route( 'fgallery_cat',$value->id)}}">{{$value->title}}</a></li>
                            @endforeach
                        </ul>

                    </div>
                    <!-- /CATEGORIES -->

            </div>

            <div class="col-md-9">
                <div class="masonry-gallery columns-4 clearfix lightbox" data-img-big="1" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>
                    @foreach($gallery as $item)
                        <a class="image-hover" href="{{url($item->imag_url)}}">
                            <img src="{{url($item->imag_url)}}" alt="...">
                        </a>
                    @endforeach
                </div>
            </div>


        </div>

    </section>


    <!-- FOOTER -->
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
</div>
</body>
</html>