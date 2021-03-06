@extends('layouts.backend.master')

@section('title')
  Account Transection
@endsection
@section('content')

    <div id="page_heading" data-uk-sticky="{ top: 48, media: 960 }">

        <h1> Account Transection </h1>

    </div>
    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-toolbar">
            <div class="md-card-toolbar-actions hidden-print">
                <i class="md-icon material-icons" id="invoice_print"></i>



                <!--end  -->
                <div class="md-card-dropdown" data-uk-dropdown="{pos:'bottom-right'}" aria-haspopup="true" aria-expanded="false"> <a href="#" data-uk-modal="{target:'#coustom_setting_modal'}"><i class="material-icons"></i><span>Coustom Setting</span></a>

                </div>
                <!--coustorm setting modal start -->
                <div class="uk-modal" id="coustom_setting_modal">
                    <div class="uk-modal-dialog">
                        <form method="POST" action="{{ route('AccountTransection_search') }}" accept-charset="UTF-8" class="user_edit_form" id="user_profile">

                            <div class="uk-modal-header">
                                <h3 class="uk-modal-title">Select Date Range and Transaction Type <i class="material-icons" data-uk-tooltip="{pos:'top'}" title="headline tooltip"></i></h3>
                            </div>

                            <div class="uk-width-large-2-2 uk-width-2-2">
                                <div class="uk-width-large-2-2 uk-width-2-2">
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                        <div class="md-input-wrapper"><label for="uk_dp_1">Form</label><input class="md-input" type="text" id="uk_dp_start" name="from_date" data-uk-datepicker="{format:'YYYY-MM-DD'}"><span class="md-input-bar "></span></div>

                                    </div>
                                </div>
                                <div class="uk-width-large-2-2 uk-width-2-2">
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                        <div class="md-input-wrapper"><label for="uk_dp_1">To</label><input class="md-input" type="text" id="uk_dp_1" name="to_date" data-uk-datepicker="{format:'YYYY-MM-DD'}"><span class="md-input-bar "></span></div>

                                    </div>
                                </div>
                                <div class="uk-width-large-2-2 uk-width-2-2">

                                        <div class="uk-width-medium-1-1">
                                            <select id="select_demo_2" name="type" class="md-input" data-uk-tooltip="{pos:'top'}" title="Select with tooltip">
                                                <option value="" disabled selected hidden>Select...</option>
                                                @foreach($type as $item)
                                                <option value="{{ $item->id }}"> {{ $item->name }}</option>
                                                @endforeach
                                            </select>


                                    </div>
                                </div>
                                {{ csrf_field() }}

                            </div>
                            <div class="uk-modal-footer uk-text-right">
                                <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                                <button type="submit" name="submit" class="md-btn md-btn-flat md-btn-flat-primary">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--end  -->
            </div>

            <h3 class="md-card-toolbar-heading-text large" id="invoice_name"></h3>
        </div>
        <div class="md-card-content">
            <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
                <thead>
                <tr>

                    <th>DATE</th>
                    <th>Ledger </th>
                    <th>CONTACT</th>
                    <th>STATUS</th>
                    <th>ID</th>
                    <th>Amount</th>
                </tr>
                </thead>



                <tbody id="td_search">


                @foreach($DailyAccount as $item)
                    <tr>

                        <td>{{ $item->date }}</td>
                        <td>{{ $item->accounttype->name }}</td>
                        <td>{{ $item->ContactName['first_name'] }}</td>
                        @if($item->ix_status==1)
                        <td>income</td>
                        @else
                            <td>expense</td>
                        @endif
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->amount }}</td>

                    </tr>
                @endforeach

                </tbody>
            </table>

            <div class="md-fab-wrapper">
                <a class="md-fab md-fab-accent" href="{{ route('dailyaccounts_create') }}" id="recordAdd">
                    <i class="material-icons"></i>
                </a>
            </div>
        </div>
    </div>

@endsection


@section('custom_footer_js')
    <!-- page specific plugins -->
    <!-- datatables -->
    <script src="{{ asset('bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <!-- datatables buttons-->
    <script src="{{ asset('bower_components/datatables-buttons/js/dataTables.buttons.js') }}"></script>
    <script src="{{ asset('assets/js/custom/datatables/buttons.uikit.js') }}"></script>
    <script src="{{ asset('bower_components/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('bower_components/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('bower_components/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('bower_components/datatables-buttons/js/buttons.colVis.js') }}"></script>
    <script src="{{ asset('bower_components/datatables-buttons/js/buttons.html5.js') }}"></script>
    <script src="{{ asset('bower_components/datatables-buttons/js/buttons.print.js') }}"></script>

    <!-- datatables custom integration -->
    <script src="{{ asset('assets/js/custom/datatables/datatables.uikit.min.js') }}"></script>

    <!--  datatables functions -->
    <script src="{{ asset('assets/js/pages/plugins_datatables.min.js') }}"></script>

@endsection