@extends('layouts.theme.master')

@section('content')
    <div class="uk-grid">
        <div class="uk-width-1-1">
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <div id="kUI_calendar"></div>
                        </div>
                        <div class="uk-width-large-1-2">
<pre class="line-numbers"><code class="language-javascript">
// calendar
$(selector).kendoCalendar();</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_header_css')
    <link rel="stylesheet" href="{{asset('bower_components/kendo-ui/styles/kendo.common-material.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('bower_components/kendo-ui/styles/kendo.material.min.css')}}" id="kendoCSS"/>
@endsection

@section('custom_footer_js')
    <!-- page specific plugins -->
    <!-- kendo UI -->
    <script src="{{asset('assets/js/kendoui_custom.min.js')}}"></script>

    <!--  kendoui functions -->
    <script src="{{asset('assets/js/pages/kendoui.min.js')}}"></script>
@endsection