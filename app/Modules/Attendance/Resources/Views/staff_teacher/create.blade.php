@extends('layouts.backend.master')

@section('custom_header_top_css')
    <link rel="stylesheet" href="{{ asset('bower_components/kendo-ui/styles/kendo.common-material.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('bower_components/kendo-ui/styles/kendo.material.min.css') }}" id="kendoCSS"/>
@endsection

@section('custom_header_css')

    <style>
        input[type=checkbox]
        {
            /* Double-sized Checkboxes */
            -ms-transform: scale(2); /* IE */
            -moz-transform: scale(2); /* FF */
            -webkit-transform: scale(2); /* Safari and Chrome */
            -o-transform: scale(2); /* Opera */
            padding: 8px;

        }
    </style>
@endsection
@section('title')
   Stuff Attendance
@endsection
@section('content')

    <div class="md-card">
        <div class="md-card-content">
            <h3 class="heading_a">Staff Teacher Attendance </h3>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">
                </div>
                <div class="uk-width-medium-1-2">


                </div>
            </div>
        </div>
     </div>

    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">

            <form action="{{ route('teacherattendance_store') }}" method="post">
                {{ csrf_field() }}

                <div align="center">
                    <label for="kUI_datepicker_a" class="uk-form-label">Date</label>
                    <input id="kUI_datepicker_a" name="attendance_date" class="new_date" value="{{ date('Y-m-d') }}" />
                </div>
                <table id="t_dt_search" class="uk-table" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th style="display: none">Id</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Status</th>

                    </tr>
                    </thead>



                    <tbody id="dt_search">

                   @foreach($users as $user)
                       <tr>
                           <td style="display: none"><input type="text" name="id[]" value="{{ $user->id }}"></td>
                           <td>{{ $user->first_name }}</td>
                           <td>{{ $user->name }}</td>
                           <td><input type="checkbox" name="status[{{ $user->id }}]"> </td>

                       </tr>
                   @endforeach

                    </tbody>
                </table>
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-6">
                        <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-wave-light waves-effect waves-button waves-light" id="button">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script>
        var attendancedate = '';

        var load_date = document.getElementById('kUI_datepicker_a');

        attendancedate = load_date.defaultValue;



        $(document).ready(function(){
            $('#attendance_date').val(attendancedate);

            $(".new_date").on('change',function() {

                attendancedate = $(this).val();

                var data = '';
                $.ajax({
                    url: "{{ route('studentattendance_getAllStudent') }}",
                    type: "GET",
                    data: {stuclass: stuclass,stusession:stusession,stusection:stusection},
                    contentType: "application/json; charset=utf-8",
                    dataType: "html",
                    success: function (data, text) {

                        $('#dt_search').html(data);

                    },
                    error: function (request, status, error) {
                        //$('#notfound').val("NOT FOUND");

                        alert(status);
                    }
                });


            });





            //end doc
        });

    </script>

@endsection


@section('custom_footer_js')
    <script>
        $('#kUI_datepicker_a').kendoDatePicker({
            format: "yyyy-MM-dd"
        });


    </script>
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
    <script src="{{ asset('assets/js/kendoui_custom.min.js') }}"></script>

    <!--  kendoui functions -->
    <script src="{{ asset('assets/js/pages/kendoui.min.js') }}"></script>

@endsection