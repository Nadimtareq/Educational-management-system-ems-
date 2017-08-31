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
                            <h1>E-LIBRARY</h1>
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
                        <div class="col-md-12">
                            <table class="table table-vertical-middle margin-bottom-60">
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <h4 class="nomargin size-16">
                                            <a href="">
                                                Hello Smarty Users
                                            </a>
                                            <ul class="list-inline categories nomargin text-muted size-11 hidden-xs">
                                                <li>Date: 11/12/2016</li>
                                            </ul>
                                        </h4>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <a href="#">Total Downloads: 1301</a>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <a href="#">Uploaded By: Admin_19919</a>
                                    </td>
                                    <td class="hidden-xs text-center">
                                        <a href="" class="btn btn-sm btn-reveal btn-primary margin-top-0">
                                            <i class="fa fa-download"></i>
                                            <span>Download</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <h4 class="nomargin size-16">
                                            <a href="">
                                                Hello Smarty Users
                                            </a>
                                            <ul class="list-inline categories nomargin text-muted size-11 hidden-xs">
                                                <li>Date: 11/12/2016</li>
                                            </ul>
                                        </h4>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <a href="#">Total Downloads: 1301</a>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <a href="#">Uploaded By: Admin_19919</a>
                                    </td>
                                    <td class="hidden-xs text-center">
                                        <a href="" class="btn btn-sm btn-reveal btn-primary margin-top-0">
                                            <i class="fa fa-download"></i>
                                            <span>Download</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <h4 class="nomargin size-16">
                                            <a href="">
                                                Hello Smarty Users
                                            </a>
                                            <ul class="list-inline categories nomargin text-muted size-11 hidden-xs">
                                                <li>Date: 11/12/2016</li>
                                            </ul>
                                        </h4>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <a href="#">Total Downloads: 1301</a>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <a href="#">Uploaded By: Admin_19919</a>
                                    </td>
                                    <td class="hidden-xs text-center">
                                        <a href="" class="btn btn-sm btn-reveal btn-primary margin-top-0">
                                            <i class="fa fa-download"></i>
                                            <span>Download</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <h4 class="nomargin size-16">
                                            <a href="">
                                                Hello Smarty Users
                                            </a>
                                            <ul class="list-inline categories nomargin text-muted size-11 hidden-xs">
                                                <li>Date: 11/12/2016</li>
                                            </ul>
                                        </h4>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <a href="#">Total Downloads: 1301</a>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <a href="#">Uploaded By: Admin_19919</a>
                                    </td>
                                    <td class="hidden-xs text-center">
                                        <a href="" class="btn btn-sm btn-reveal btn-primary margin-top-0">
                                            <i class="fa fa-download"></i>
                                            <span>Download</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <h4 class="nomargin size-16">
                                            <a href="">
                                                Hello Smarty Users
                                            </a>
                                            <ul class="list-inline categories nomargin text-muted size-11 hidden-xs">
                                                <li>Date: 11/12/2016</li>
                                            </ul>
                                        </h4>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <a href="#">Total Downloads: 1301</a>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <a href="#">Uploaded By: Admin_19919</a>
                                    </td>
                                    <td class="hidden-xs text-center">
                                        <a href="" class="btn btn-sm btn-reveal btn-primary margin-top-0">
                                            <i class="fa fa-download"></i>
                                            <span>Download</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>
                                        <h4 class="nomargin size-16">
                                            <a href="">
                                                Hello Smarty Users
                                            </a>
                                            <ul class="list-inline categories nomargin text-muted size-11 hidden-xs">
                                                <li>Date: 11/12/2016</li>
                                            </ul>
                                        </h4>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <a href="#">Total Downloads: 1301</a>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <a href="#">Uploaded By: Admin_19919</a>
                                    </td>
                                    <td class="hidden-xs text-center">
                                        <a href="" class="btn btn-sm btn-reveal btn-primary margin-top-0">
                                            <i class="fa fa-download"></i>
                                            <span>Download</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>
                                        <h4 class="nomargin size-16">
                                            <a href="">
                                                Hello Smarty Users
                                            </a>
                                            <ul class="list-inline categories nomargin text-muted size-11 hidden-xs">
                                                <li>Date: 11/12/2016</li>
                                            </ul>
                                        </h4>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <a href="#">Total Downloads: 1301</a>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <a href="#">Uploaded By: Admin_19919</a>
                                    </td>
                                    <td class="hidden-xs text-center">
                                        <a href="" class="btn btn-sm btn-reveal btn-primary margin-top-0">
                                            <i class="fa fa-download"></i>
                                            <span>Download</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>
                                        <h4 class="nomargin size-16">
                                            <a href="">
                                                Hello Smarty Users
                                            </a>
                                            <ul class="list-inline categories nomargin text-muted size-11 hidden-xs">
                                                <li>Date: 11/12/2016</li>
                                            </ul>
                                        </h4>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <a href="#">Total Downloads: 1301</a>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <a href="#">Uploaded By: Admin_19919</a>
                                    </td>
                                    <td class="hidden-xs text-center">
                                        <a href="" class="btn btn-sm btn-reveal btn-primary margin-top-0">
                                            <i class="fa fa-download"></i>
                                            <span>Download</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>
                                        <h4 class="nomargin size-16">
                                            <a href="">
                                                Hello Smarty Users
                                            </a>
                                            <ul class="list-inline categories nomargin text-muted size-11 hidden-xs">
                                                <li>Date: 11/12/2016</li>
                                            </ul>
                                        </h4>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <a href="#">Total Downloads: 1301</a>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <a href="#">Uploaded By: Admin_19919</a>
                                    </td>
                                    <td class="hidden-xs text-center">
                                        <a href="" class="btn btn-sm btn-reveal btn-primary margin-top-0">
                                            <i class="fa fa-download"></i>
                                            <span>Download</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>
                                        <h4 class="nomargin size-16">
                                            <a href="">
                                                Hello Smarty Users
                                            </a>
                                            <ul class="list-inline categories nomargin text-muted size-11 hidden-xs">
                                                <li>Date: 11/12/2016</li>
                                            </ul>
                                        </h4>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <a href="#">Total Downloads: 1301</a>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <a href="#">Uploaded By: Admin_19919</a>
                                    </td>
                                    <td class="hidden-xs text-center">
                                        <a href="" class="btn btn-sm btn-reveal btn-primary margin-top-0">
                                            <i class="fa fa-download"></i>
                                            <span>Download</span>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12 text-center">
                            <ul class="pagination pagination-sm">
                                <li class="disabled"><a href="#">Prev</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">Next;</a></li>
                            </ul>
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