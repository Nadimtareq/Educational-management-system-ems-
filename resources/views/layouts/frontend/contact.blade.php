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
                <h1>CONTACT</h1>
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

                <!-- FORM -->
                <div class="col-md-7">

                    <h3>Drop us a line or just say <strong><em>Hello!</em></strong></h3>


                    <!-- Alert Success -->
                    <div id="alert_success" class="alert alert-success margin-bottom-30">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Thank You!</strong> Your message successfully sent!
                    </div><!-- /Alert Success -->


                    <!-- Alert Failed -->
                    <div id="alert_failed" class="alert alert-danger margin-bottom-30">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>[SMTP] Error!</strong> Internal server error!
                    </div><!-- /Alert Failed -->


                    <!-- Alert Mandatory -->
                    <div id="alert_mandatory" class="alert alert-danger margin-bottom-30">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Sorry!</strong> You need to complete all mandatory (*) fields!
                    </div><!-- /Alert Mandatory -->


                    <form action="php/contact.php" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <input type="hidden" name="action" value="contact_send" />

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label for="contact:name">Full Name *</label>
                                        <input required type="text" value="" class="form-control" name="contact[name][required]" id="contact:name">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="contact:email">E-mail Address *</label>
                                        <input required type="email" value="" class="form-control" name="contact[email][required]" id="contact:email">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="contact:phone">Phone</label>
                                        <input type="text" value="" class="form-control" name="contact[phone]" id="contact:phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label for="contact:subject">Subject *</label>
                                        <input required type="text" value="" class="form-control" name="contact[subject][required]" id="contact:subject">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Department</label>
                                        <select class="form-control pointer" name="contact[department]">
                                            <option value="">--- Select ---</option>
                                            <option value="Marketing">Marketing</option>
                                            <option value="Webdesign">Webdesign</option>
                                            <option value="Architecture">Architecture</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label for="contact:message">Message *</label>
                                        <textarea required maxlength="10000" rows="8" class="form-control" name="contact[message]" id="contact:message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label for="contact:attachment">File Attachment</label>

                                        <!-- custom file upload -->
                                        <input class="custom-file-upload" type="file" id="file" name="contact[attachment]" id="contact:attachment" data-btn-text="Select a File" />
                                        <small class="text-muted block">Max file size: 10Mb (zip/pdf/jpg/png)</small>

                                    </div>
                                </div>
                            </div>

                        </fieldset>

                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> SEND MESSAGE</button>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- /FORM -->


                <!-- INFO -->
                <div class="col-md-5">

                    <h2>Visit Us</h2>

                    <div id="map2" class="height-400 grayscale"></div>

                    <hr />

                    <p>
                        <span class="block"><strong><i class="fa fa-map-marker"></i> Address:</strong> Street Name, City Name, Country</span>
                        <span class="block"><strong><i class="fa fa-phone"></i> Phone:</strong> <a href="tel:1800-555-1234">1800-555-1234</a></span>
                        <span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:mail@yourdomain.com">mail@yourdomain.com</a></span>
                    </p>

                </div>
                <!-- /INFO -->

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


<!--
    GMAP.JS
    http://hpneo.github.io/gmaps/
-->
@include('layouts.frontend.javascript')
</body>
</html>