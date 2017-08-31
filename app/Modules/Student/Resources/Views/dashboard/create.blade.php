@extends('layouts.backend.master')

@section('title')
Dashboard
@endsection

@section('content')

<div id="page_content_inner">

    <div class="uk-grid uk-grid-width-large-1-1 uk-grid-width-medium-1-1 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>

        <form class="form-inline">
            <div class="uk-grid" data-uk-grid-margin="">
                <div class="uk-width-large-1-4 uk-width-medium-1-1">
                    <div class="uk-input-group">
                        <select data-md-selectize="" id="wizard_birth_place" name="wizard_birth_place" required="">
                            <option value="">
                                Place of Birth
                            </option>
                            <option value="city_0">
                                Sonyaton
                            </option>
                            <option value="city_1">
                                Reillyberg
                            </option>
                            <option value="city_2">
                                East Dannie
                            </option>
                            <option value="city_3">
                                New Eliezermouth
                            </option>
                            <option value="city_4">
                                Lennystad
                            </option>
                            <option value="city_5">
                                Brownchester
                            </option>
                        </select>
                    </div>
                </div>
                <div class="uk-width-large-1-4 uk-width-medium-1-1">
                    <div class="uk-input-group">
                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span><label for="uk_dp_end">Start Date</label><input class="md-input" data-uk-datepicker="" id="uk_dp_end" type="text">
                    </div>
                </div>
                <div class="uk-width-large-1-4 uk-width-medium-1-1">
                    <div class="uk-input-group">
                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span><label for="uk_dp_end">End Date</label> <input class="md-input" data-uk-datepicker="" id="uk_dp_end" type="text">
                    </div>
                </div>
                <div class="uk-width-large-1-4 uk-width-medium-1-1">
                    <div class="uk-input-group">
                        <button class="btn btn-default" type="submit">Filter</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="pricing_table pricing_table_a uk-grid uk-grid-small uk-grid-width-medium-1-3 uk-grid-width-large-1-3 uk-margin-large-bottom" data-uk-grid-margin data-uk-grid-match="{target:'.md-card-content'}">

        <div>
            <div class="md-card payment">
                <div class="md-card-content padding-reset" >
                    <div style="" class="pricing_table_plan md-bg-green-500 md-color-white">Total Prospect</div>
                    <div class="pricing_table_price">

                        <span class="currency"></span>{!! $superadmin !!}
                        <!-- <span class="period">monthly</span> -->

                    </div>

                </div>
            </div>
        </div>

        <div>
            <div class="md-card payment">
                <div class="md-card-content padding-reset" >
                    <div style="" class="pricing_table_plan md-bg-green-500 md-color-white">Total Meeting</div>
                    <div class="pricing_table_price">
                        <span class="currency"></span>50%
                        <!-- <span class="period">monthly</span> -->
                    </div>

                </div>
            </div>
        </div>

        <div>
            <div class="md-card payment">
                <div class="md-card-content padding-reset" >
                    <div style="" class="pricing_table_plan md-bg-green-500 md-color-white">Total customer</div>
                    <div class="pricing_table_price">
                        <span class="currency"></span>{!! $superadmin !!}
                        <!-- <span class="period">monthly</span> -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div id="page_content_inner">
    <!-- statistics (small charts) -->
    <div class="uk-grid uk-grid-width-large-1-1 uk-grid-width-medium-1-1 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>

        <form class="form-inline">
            <div class="uk-grid" data-uk-grid-margin="">
                <div class="uk-width-large-1-4 uk-width-medium-1-1">
                    <div class="uk-input-group">
                        <select data-md-selectize="" id="wizard_birth_place" name="wizard_birth_place" required="">
                            <option value="">
                                Place of Birth
                            </option>
                            <option value="city_0">
                                Sonyaton
                            </option>
                            <option value="city_1">
                                Reillyberg
                            </option>
                            <option value="city_2">
                                East Dannie
                            </option>
                            <option value="city_3">
                                New Eliezermouth
                            </option>
                            <option value="city_4">
                                Lennystad
                            </option>
                            <option value="city_5">
                                Brownchester
                            </option>
                        </select>
                    </div>
                </div>
                <div class="uk-width-large-1-4 uk-width-medium-1-1">
                    <div class="uk-input-group">
                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span> <label for="uk_dp_end">Start Date</label> <input class="md-input" data-uk-datepicker="" id="uk_dp_end" type="text">
                    </div>
                </div>
                <div class="uk-width-large-1-4 uk-width-medium-1-1">
                    <div class="uk-input-group">
                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span> <label for="uk_dp_end">End Date</label> <input class="md-input" data-uk-datepicker="" id="uk_dp_end" type="text">
                    </div>
                </div>
                <div class="uk-width-large-1-4 uk-width-medium-1-1">
                    <div class="uk-input-group">
                        <button class="btn btn-default" type="submit">Filter</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="pricing_table pricing_table_a uk-grid uk-grid-small uk-grid-width-medium-1-3 uk-grid-width-large-1-3 uk-margin-large-bottom" data-uk-grid-margin data-uk-grid-match="{target:'.md-card-content'}">

        <div>
            <div class="md-card payment">
                <div class="md-card-content padding-reset" >
                    <div style="" class="pricing_table_plan md-bg-green-500 md-color-white">Total Completed Meeting</div>
                    <div class="pricing_table_price">
                        <span class="currency"></span>20%
                        <!-- <span class="period">monthly</span> -->
                    </div>

                </div>
            </div>
        </div>
        <div>
            <div class="md-card payment">
                <div class="md-card-content padding-reset" >
                    <div style="" class="pricing_table_plan md-bg-green-500 md-color-white">Total Pending Meeting</div>
                    <div class="pricing_table_price">
                        <span class="currency"></span>80%
                        <!-- <span class="period">monthly</span> -->
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>

<!-- google web fonts -->
<script>
    WebFontConfig = {
        google: {
            families: [
                'Source+Code+Pro:400,700:latin',
                'Roboto:400,300,500,700,400italic:latin'
            ]
        }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>
@endsection