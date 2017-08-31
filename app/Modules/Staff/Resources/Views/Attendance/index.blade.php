@extends('layouts.backend.master')

@section('title')
    Student Attendance
@endsection

@section('content')

    <div class="md-card">
        <div class="md-card-content">
            <div class="uk-margin-bottom">
                <a href="#" class="md-btn uk-margin-right" id="printTable">Print Table</a>
                <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                    <button class="md-btn">Columns <i class="uk-icon-caret-down"></i></button>
                    <div class="uk-dropdown">
                        <ul class="uk-nav uk-nav-dropdown" id="columnSelector"></ul>
                    </div>
                </div>
            </div>
            <div class="uk-overflow-container uk-margin-bottom">
                <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_pager_filter">
                    <thead>
                    <tr>
                        <th></th>
                        <th data-priority="critical">Date</th>
                        <th data-priority="1">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($st_atten as $value)
                        <tr>

                            <td></td>
                            <td>{!! $value->date !!}</td>
                            <td>{!! $value->atten_status  !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <ul class="uk-pagination ts_pager">
                <li data-uk-tooltip title="Select Page">
                    <select class="ts_gotoPage ts_selectize"></select>
                </li>
                <li class="first"><a href="javascript:void(0)"><i class="uk-icon-angle-double-left"></i></a></li>
                <li class="prev"><a href="javascript:void(0)"><i class="uk-icon-angle-left"></i></a></li>
                <li><span class="pagedisplay"></span></li>
                <li class="next"><a href="javascript:void(0)"><i class="uk-icon-angle-right"></i></a></li>
                <li class="last"><a href="javascript:void(0)"><i class="uk-icon-angle-double-right"></i></a></li>
                <li data-uk-tooltip title="Page Size">
                    <select class="pagesize ts_selectize">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                </li>
            </ul>
        </div>
    </div>

    <div class="uk-modal" id="modal_daterange">
        <div class="uk-modal-dialog">
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-small-1-2">
                    <div class="uk-input-group">
                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                        <label for="ts_dp_start">Start Date</label>
                        <input class="md-input" type="text" id="ts_dp_start">
                    </div>
                </div>
                <div class="uk-width-small-1-2">
                    <div class="uk-input-group">
                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                        <label for="ts_dp_end">End Date</label>
                        <input class="md-input" type="text" id="ts_dp_end">
                    </div>
                </div>
            </div>
            <div class="uk-modal-footer uk-text-right">
                <button type="button" class="md-btn md-btn-flat uk-modal-close">Cancel</button><button type="button" id="daterangeApply" class="md-btn md-btn-flat md-btn-flat-primary">Select range</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/pages/plugins_tablesorter.min.js') }}"></script>
    <script src="{{ asset('bower_components/tablesorter/dist/js/extras/jquery.tablesorter.pager.min.js') }}"></script>
    <script src="{{ asset('bower_components/tablesorter/dist/js/jquery.tablesorter.min.js') }}"></script>
    <script src="{{ asset('bower_components/tablesorter/dist/js/jquery.tablesorter.widgets.min.js') }}"></script>
    <script src="{{ asset('bower_components/tablesorter/dist/js/widgets/widget-alignChar.min.js') }}"></script>
    <script src="{{ asset('bower_components/tablesorter/dist/js/widgets/widget-columnSelector.min.js') }}"></script>
    <script src="{{ asset('bower_components/tablesorter/dist/js/widgets/widget-print.min.js') }}"></script>
    <script src="{{ asset('bower_components/ion.rangeslider/js/ion.rangeSlider.min.js') }}"></script>
@endsection



@section('custom_footer_js')
    <!-- ckeditor -->
    <script src="{{ asset('bower_components/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('bower_components/ckeditor/adapters/jquery.js') }}"></script>

    <!--  wysiwyg editors functions -->
    <script src="{{ asset('assets/js/pages/forms_wysiwyg.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom/dropify/dist/js/dropify.min.js') }}"></script>

    <!--  form file input functions -->
    <script src="{{ asset('assets/js/pages/forms_file_input.min.js') }}"></script>
    <!-- page specific plugins -->

@endsection

@section('custom_header_top_css')
    <link rel="stylesheet" href="{{ asset('assets/skins/dropify/css/dropify.css') }}">
@endsection