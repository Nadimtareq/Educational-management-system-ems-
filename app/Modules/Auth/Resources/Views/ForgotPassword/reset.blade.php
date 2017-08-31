<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">

    <title>{{ config('app.name') }} - Login Page</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>

    <!-- uikit -->
    <link rel="stylesheet" href="{{ asset('bower_components/uikit/css/uikit.almost-flat.min.css') }}"/>

    <!-- altair admin login page -->
    <link rel="stylesheet" href="{{ asset('assets/css/login_page.min.css') }}" />

</head>


<body class="login_page">

<div class="login_page_wrapper">
    @include('layouts.backend.includes.notice')
    <br/>
    <br/>
    <div class="md-card" id="login_card">
        <div class="md-card-content large-padding" id="login_form">
            <div class="login_heading">
                <div class="user_avatar"></div>
            </div>

            <form action="{{ route('forgotpassword_update') }}" method="post">
                <div class="uk-form-row">
                    <input name="token" type="hidden" value="{{ $token }}">
                    <label for="login_username">New Password</label>
                    <input class="md-input" type="password" id="login_username" name="password" required/>
                </div>

                {{ csrf_field() }}


                <div class="uk-margin-medium-top">
                    <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large">Reset Password</button>
                </div>




            </form>
        </div>
        <div class="md-card-content large-padding uk-position-relative" id="login_help" style="display: none">
            <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
            <h2 class="heading_b uk-text-success">Can't log in?</h2>
            <p>Here’s the info to get you back in to your account as quickly as possible.</p>
            <p>First, try the easiest thing: if you remember your password but it isn’t working, make sure that Caps Lock is turned off, and that your username is spelled correctly, and then try again.</p>
            <p>If your password still isn’t working, it’s time to <a href="#" id="password_reset_show">reset your password</a>.</p>
        </div>
        <div class="md-card-content large-padding" id="login_password_reset" style="display: none">
            <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
            <h2 class="heading_a uk-margin-large-bottom">Reset password</h2>
            <form>
                <div class="uk-form-row">
                    <label for="login_email_reset">Your email address</label>
                    <input class="md-input" type="text" id="login_email_reset" name="login_email_reset" />
                </div>
                <div class="uk-margin-medium-top">
                    <a href="#" class="md-btn md-btn-primary md-btn-block">Reset password</a>
                </div>
            </form>
        </div>
        <div class="md-card-content large-padding" id="register_form" style="display: none">
            <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
            <h2 class="heading_a uk-margin-medium-bottom">Create an account</h2>
            <form action="{{ route('Registration_store') }}" method="post">

                <div class="uk-form-row">
                    <label for="register_name">Full Name</label>
                    <input class="md-input" type="text" id="register_name" name="register_name" required/>
                    @if($errors->has('register_name'))
                        <span style="color:red"> {{ $errors->first('register_name') }}</span>
                    @endif
                </div>
                <div class="uk-form-row">
                    <label for="register_email">E-mail</label>
                    <input class="md-input" type="email" id="register_email" name="email" />
                    @if($errors->has('email'))
                        <span style="color:red"> {{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="uk-form-row">
                    <label for="phone">Phone</label>
                    <input class="md-input" type="text" id="phone" name="phone" />
                    @if($errors->has('phone'))
                        <span style="color:red"> {{ $errors->first('phone') }}</span>
                    @endif
                </div>

                <div class="uk-form-row">
                    <label for="register_password">Password</label>
                    <input class="md-input" type="password" id="register_password" name="register_password" />
                    @if($errors->has('register_username'))
                        <span style="color:red"> {{ $errors->first('register_password') }}</span>
                    @endif
                </div>
                <div class="uk-form-row">
                    <label for="register_password_repeat">Repeat Password</label>
                    <input class="md-input" type="password" id="register_password_repeat" name="register_password_repeat" />
                    @if($errors->has('register_username'))
                        <span style="color:red"> {{ $errors->first('register_password_repeat') }}</span>
                    @endif
                </div>

                {{ csrf_field() }}
                <div class="uk-margin-medium-top">
                    <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large">Sign Up</button>
                </div>


            </form>
        </div>
    </div>




    <div class="uk-margin-top uk-text-center">
        <a href="#" id="signup_form_show">Create an account</a>
    </div>


</div>

<!-- common functions -->
<script src=" {{ asset('assets/js/common.min.js') }}"></script>
<!-- uikit functions -->
<script src="{{ asset('assets/js/uikit_custom.min.js') }}"></script>
<!-- altair core functions -->
<script src="{{ asset('assets/js/altair_admin_common.min.js') }}"></script>

<!-- altair login page functions -->
<script src="{{ asset('assets/js/pages/login.min.js') }}"></script>

<script>
    // check for theme
    if (typeof(Storage) !== "undefined") {
        var root = document.getElementsByTagName( 'html' )[0],
                theme = localStorage.getItem("altair_theme");
        if(theme == 'app_theme_dark' || root.classList.contains('app_theme_dark')) {
            root.className += ' app_theme_dark';
        }
    }
</script>

</body>
</html>