@extends('layouts.backend.master')

@section('content')
    <!-- statistics (small charts) -->

    @include('layouts.backend.includes.teachermenu')


    <div class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>
        <div>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_visitors peity_data">5,3,9,6,5,9,7</span></div>
                    <span class="uk-text-muted uk-text-small">Total Recieve</span>
                    <h2 class="uk-margin-remove"><span class="countUpMe">{{ isset($TotalRecieve) ?  $TotalRecieve : '0' }}<noscript></noscript></span></h2>
                </div>
            </div>
        </div>
        <div>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_sale peity_data">5,3,9,6,5,9,7,3,5,2</span></div>
                    <span class="uk-text-muted uk-text-small">Total Leave</span>
                    <h2 class="uk-margin-remove"><span class="countUpMe">{{ isset($daysleave[0]->days) ? $daysleave[0]->days : '0' }}<noscript></noscript></span></h2>
                </div>
            </div>
        </div>

        <div>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_live peity_data">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span></div>
                    <span class="uk-text-muted uk-text-small">Visitors (live)</span>
                    <h2 class="uk-margin-remove" id="peity_live_text">46</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-grid uk-grid-width-large-1-2 uk-grid-width-medium-1-2 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>
        <div>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_visitors peity_data">5,3,9,6,5,9,7</span></div>
                    <span class="uk-text-muted uk-text-small">Class Teacher</span>
                    <h2 class="uk-margin-remove"><span class="countUpMe">


                           @if(isset($classteacher))
                            @if($classteacher->session->title==date('Y'))
                          <h4>Session: <span style="color: #3e1a98;">{{ $classteacher->session->title }}</span> Class : <span style="color: #3e1a98;">{{ $classteacher->classe->name }} </span> Section : <span style="color: #3e1a98;"> {{ $classteacher->section->name }}</span></h4>



                            @endif
					     @endif		


                            <noscript>12456</noscript></span></h2>
                </div>
            </div>
        </div>
        <div>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_sale peity_data">5,3,9,6,5,9,7,3,5,2</span></div>
                    <span class="uk-text-muted uk-text-small">Sale</span>
                    <h2 class="uk-margin-remove">$<span class="countUpMe">0<noscript>142384</noscript></span></h2>
                </div>
            </div>
        </div>


    </div>

@endsection

@section('custom_footer_js')
    <script>
        // load parsley config (altair_admin_common.js)
        altair_forms.parsley_validation_config();
    </script>
    <script src="bower_components/parsleyjs/dist/parsley.min.js"></script>
    <script src="{{ asset('assets/js/pages/components_notifications.min.js') }} "></script>
    <script src="{{ asset('assets/js/kendoui_custom.min.js') }}"></script>

    <!--  kendoui functions -->
    <script src="{{ asset('assets/js/pages/kendoui.min.js') }}"></script>
@endsection

@section('custom_header_top_css')
    <link rel="stylesheet" href="{{ asset('bower_components/kendo-ui/styles/kendo.common-material.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('bower_components/kendo-ui/styles/kendo.material.min.css') }}" id="kendoCSS"/>
@endsection



