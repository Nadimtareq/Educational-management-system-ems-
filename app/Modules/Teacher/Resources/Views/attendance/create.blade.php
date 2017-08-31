@extends('layouts.backend.master')

@section('title')
    My Class Students Attendance
@endsection
@section('content')
    <h4 class="heading_a uk-margin-bottom">Class Students</h4>
    @include('layouts.backend.includes.teachermenu')
    <form action="{{ route('teacher_student_Attendance_store') }}" method="post">
        {{ csrf_field() }}
   <div class="md-card uk-margin-medium-bottom">
        <div class="uk-margin-bottom" data-uk-margin="">

            <div class="md-btn-group uk-margin-small-top">
                <a class="md-btn" href="#">{{ $session }}</a>
                <a href="#" class="md-btn">{{ $myclass }}</a>
                <a href="#" class="md-btn">{{ $section }}</a>

            </div>

        </div>

        <div class="uk-width-medium-1-2 uk-row-first">


            <div class="uk-grid">
                <div class="uk-width-large-2-3 uk-width-1-1">
                    <div class="uk-input-group">
                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                        <div class="md-input-wrapper"><label for="uk_dp_1"></label><input name="attendance_date" value="{{ date('Y-m-d') }}" class="md-input" type="text" id="uk_dp_1"  data-uk-datepicker="{format:'YYYY-MM-DD'}"><span class="md-input-bar "></span></div>

                    </div>
                </div>
            </div>

        </div>
        <div class="md-card-content">
            <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
                <thead>
                <tr>

                    <th>Student Roll</th>
                    <th>Student Name</th>
                    <th>Attendance</th>


                </tr>
                </thead>



                <tbody>

                @if(isset($student))

                    @foreach($student as $item)

                        <tr>
                            <td><input type="hidden" name="user_id[]" value="{{ $item->user_id }}" /> {{ $item->student_roll  }}</td>
                            <td>{{ $item->user->first_name }}</td>

                            <td>  <p>
                                    <input type="checkbox" name="status[{{ $item->user_id }}]" checked data-md-icheck />

                                </p> </td>


                        </tr>
                    @endforeach
                @endif

                </tbody>
            </table>
            <button type="submit" class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">Submit</button>
        </div>
    </div>
</form>
@endsection



@section('custom_footer_js')

    <!-- page specific plugins -->
    <!-- datatables -->
    <script src="{{ asset('bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>



    <script src="{{ asset('assets/js/pages/components_notifications.min.js') }} "></script>
    <script src="{{ asset('assets/js/kendoui_custom.min.js') }}"></script>

    <!--  kendoui functions -->
    <script src="{{ asset('assets/js/pages/kendoui.min.js') }}"></script>

@endsection


@section('custom_header_top_css')
    <link rel="stylesheet" href="{{ asset('bower_components/kendo-ui/styles/kendo.common-material.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('bower_components/kendo-ui/styles/kendo.material.min.css') }}" id="kendoCSS"/>
@endsection