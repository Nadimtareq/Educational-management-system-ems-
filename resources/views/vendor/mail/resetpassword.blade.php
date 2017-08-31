Hello, {{ $user->first_name  }} <br/>
Thanks for Email Varification. <br/>

To Reset your Password Click the link <a href="{{ url("forgotpassword/verify/$id/$token") }}"> Reset </a>
