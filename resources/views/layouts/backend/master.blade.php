@include('layouts.backend.includes.head')
<body class="sidebar_main_open sidebar_main_swipe">
@include('layouts.backend.includes.sidebar')
@include('layouts.backend.includes.header')

<div id="page_content">
    <div id="page_content_inner">
        <!-- main content start from here -->
    @include('layouts.backend.includes.notice')
       @yield('content')
        <!-- main content end from here -->

    </div>
</div>

@include('layouts.backend.includes.js_script')

</body>
</html>