@extends('layouts.backend.master')

@section('title')
My Class Students Result
@endsection
@section('content')
<h4 class="heading_a uk-margin-bottom">Students Result </h4>
@include('layouts.backend.includes.teachermenu')
<form action="{{ route('teacher_student_result_update') }}" method="post" >
    {{ csrf_field() }}
    <div class="md-card">
        <div class="md-card-content">
            <h3 class="heading_a"><a href="{{ route('teacher_student_result') }}"> <i class="material-icons">swap_horiz</i> Return Back</a></h3>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-3">
                    <select name="exam_id" class="md-input" data-uk-tooltip="{pos:'top'}" title="Select with exam code">
                        @foreach($exam as $item)

                            @if($ex_id==$item->id)
                                <option selected value="{{ $item->id }}">{{ $item->name."-".$item->classe->name."-".$item->term->title }} </option>
                            @endif
                        @endforeach
                    </select>
                    <span class="uk-form-help-block">With Exams </span>
                </div>
                <div class="uk-width-medium-1-3">

                    <select name="subject_id" class="md-input" data-uk-tooltip="{pos:'top'}" title="Select with subject">
                        @foreach($subject as $item)

                        @if($sb_id ==$item->id )
                        <option selected value="{{ $item->id }}">{{ $item->title }} </option>

                        @endif


                        @endforeach
                    </select>
                    <span class="uk-form-help-block">With Subjects</span>
                </div>

                <div class="uk-width-medium-1-3">
                    <p>

                        <span class="uk-badge uk-badge-success">{{ $session }}</span>
                        <span class="uk-badge uk-badge-warning">{{ $myclass }}</span>
                        <span class="uk-badge uk-badge-danger">{{ $section }} </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <div class="uk-overflow-container">
                <table class="uk-table">
                    <caption>Student List</caption>
                    <thead>
                    <tr>
                        <th width="40%">Roll</th>
                        <th width="40%">Name</th>
                        <th width="12%" align="right"> Obtained Mark</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($students as $value)
                    <tr>
                        <td width="40%">{{ $value->student_roll }}</td>
                        <td width="40%"><input name="user_id[]" type="hidden" value="{{ $value->id }}"> {{ $value->user->first_name }}</td>
                        <td width="12%" align="right"><input name="mark[]" size="10" type="number" min="0" maxlength="3" max="100" value="{{ $value->mark }}" ></td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
                <div class="uk-width-medium-1-5 uk-grid-margin uk-row-first">
                    <button class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
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


<!-- datatables custom integration -->
<script src="{{ asset('assets/js/custom/datatables/datatables.uikit.min.js') }}"></script>

<!--  datatables functions -->
<script src="{{ asset('assets/js/pages/plugins_datatables.min.js') }}"></script>
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