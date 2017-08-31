@extends('layouts.backend.master')

@section('content')
    <!-- statistics (small charts) -->

    <br/>
    <br/>
    <div class="md-card-list-wrapper" id="mailbox">
        <div class="uk-width-large-8-10 uk-container-center">

            <div class="md-card-list">
                <br/>
                <br/>
                <div class="md-card-list-header heading_list">Accounts Lists</div>
                <ul class="hierarchical_slide">
                    @foreach($account as $item)
                        <li>

                            <span class="md-card-list-item-date">  {{ $item->created_at }}</span>



                            <div class="md-card-list-item-subject">
                                @if($item->ix_status==0)
                                    <span>You received {{ $item->amount }} BDT in {{ $item->accounttype->name }} Date:  {{ $item->date }} </span>
                                @else
                                    <span>You paid {{ $item->amount }} BDT in {{ $item->accounttype->name }} Date:  {{ $item->date }} </span>
                                @endif
                            </div>


                        </li>
                    @endforeach
                </ul>
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



