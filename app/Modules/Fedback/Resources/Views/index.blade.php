@extends('layouts.backend.master')

@section('title')
   Feedback
@endsection

@section('content')
    <div id="page_content_inner">
        <div class="uk-width-large-10-10">
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
                                <th data-priority="6">Serial</th>
                                <th data-priority="1">Name</th>
                                <th data-priority="2">Email/Phone</th>
                                <th data-priority="3">Subject</th>
                                <th data-priority="3">Message</th>
                                {{--<th class="filter-false remove sorter-false uk-text-center" data-priority="1">Actions</th>--}}
                            </tr>
                            </thead>
                            <?php
                                $i=1;
                            ?>
                            <tbody>
                            @foreach($fedback as $value)
                                <tr>
                                    <td></td>
                                    <td>{!! $i++ !!}</td>
                                    <td>{!! $value->name!!}</td>
                                    <td>{!! $value->email_phone !!}</td>
                                    <td>{!! $value->subject !!}</td>
                                    <td>{!! $value->message !!}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
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
            </div>
        </div>
    </div>
    <script>

        function deleterow(link) {
            UIkit.modal.confirm('Are you sure?', function(){
                window.location.href = link;
            });
        }
    </script>
@endsection