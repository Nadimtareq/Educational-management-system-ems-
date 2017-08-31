Hello, {{ $user->first_name  }} <br/>
Thanks for Registration. <br/>

To activate your account Click the link <a href="{{ url("registration/verify/$user->id/$code") }}"> Verify </a>
