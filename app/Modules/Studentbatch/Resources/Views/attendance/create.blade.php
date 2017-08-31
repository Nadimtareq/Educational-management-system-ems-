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
    Student Attendance
@endsection
@section('content')

    <div class="md-card">
        <div class="md-card-content">
            <h3 class="heading_a">Student Attendance </h3>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-4">
                    <select name="session_id" id="session_id" class="md-input">
                        <option value="" disabled selected hidden>Select...</option>
                        @foreach($session as $item)
                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                        @endforeach
                    </select>
                    <span class="uk-form-help-block">Session</span>
                    @if($errors->has('session_id'))

                        <span style="color:red">Session is Required</span>

                    @endif
                </div>

                <div class="uk-width-medium-1-4">

                    <select name="student_class" id="class"  class="md-input" data-uk-tooltip="{pos:'top'}" title="Select with tooltip">
                        <option value="" disabled selected hidden>Select...</option>
                        @foreach($app_class as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <span class="uk-form-help-block">Class</span>
                    @if($errors->has('student_class'))

                        <span style="color:red">Class is Required</span>

                    @endif
                </div>
                <div class="uk-width-medium-1-4">
                    <select name="section" id="section" class="md-input" >
                        <option value="" disabled selected hidden>Select...</option>

                    </select>
                    <span class="uk-form-help-block">Section</span>
                </div>
                <div class="uk-width-medium-1-4">
                    <br/>           <button id="filter" class="md-btn md-btn-primary md-btn-block md-btn-wave-light waves-effect waves-button waves-light" href="javascript:void(0)">Filter</button>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-margin>
                <div  class="uk-width-medium-1-1">

                    <div align="center">
                        <label for="kUI_datepicker_a" class="uk-form-label">Date</label>
                        <input id="kUI_datepicker_a" class="new_date" value="{{ date('Y-m-d') }}" />
                    </div>


                </div>



            </div>
            <div class="uk-grid" data-uk-grid-margin>


                <div class="uk-width-medium-1-1">

                    <h2 style="text-align: center" id="teacher"></h2>

                </div>

            </div>

        </div>
    </div>

    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <form action="{{ route('studentattendance_store') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="teacher_id" id="teacher_id" />
                <input type="hidden" name="attendance_date"  id="attendance_date" />
                <input type="hidden"  name="student_class" id="student_class" value="">
                <input type="hidden" name="student_session" id="student_session" value="">
                <input type="hidden"  name="student_section"id="student_section" value="">
                <table id="t_dt_search" class="uk-table" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th style="display: none">Id</th>
                        <th>Roll</th>
                        <th>Name</th>
                        <th>Status</th>

                    </tr>
                    </thead>



                    <tbody id="dt_search">






                    </tbody>
                </table>
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-6">
                        <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-wave-light waves-effect waves-button waves-light">Submit</button>
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

                $('#attendance_date').val(attendancedate);
            });

            $("#filter").on('click',function() {

                var stusection = $('#section').val();
                var stusession = $('#session_id').val();
                var stuclass = $('#class').val();
                if (stusection !== null && stusession !== null && stuclass !== null) {

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


                    $.ajax({
                        url: "{{ route('studentattendance_getteacher') }}",
                        type: "GET",
                        data: {stuclass: stuclass,stusession:stusession,stusection:stusection},
                        success: function (data, text) {
                            var teacher=document.getElementById("teacher");

                            teacher.innerText=" Class Techer : ";
                            teacher.innerText += data[0].first_name;

                            $('#teacher_id').val(data[0].id);
                            $('#student_session').val(stusession);
                            $('#student_class').val(stuclass);
                            $('#student_section').val(stusection);


                        },
                        error: function (request, status, error) {
                            //$('#notfound').val("NOT FOUND");

                            alert(error);
                        }
                    });
                }
            });

            $("#studentinfo").on('keyup',function(){

                var student= $(this).val();
                var data='';
                $.ajax({
                    url: "{{ route('studentbatch_getstudent') }}",
                    type: "GET",
                    data: {student : student},
                    dataType: "json",
                    success: function (data, text) {
                        if (!$.trim(data)){
                            $("#notfound").text("Not Found").css({'color': 'red'});
                            $('#Student_name').val('');
                            $('#student_email').val('');
                            $('#student_phone').val('');
                            $('#user_id').val('');
                        }

                        //  $('#Student_name').val(data);
                        $.each(data,function(index, value){
                            $('#Student_name').val(value.first_name);
                            $('#student_email').val(value.email);
                            $('#student_phone').val(value.phone);
                            $('#user_id').val(value.id);
                            $("#notfound").text("");
                        });
                    },
                    error: function (request, status, error) {
                        $('#notfound').val("NOT FOUND");
                    }
                });
            });



            $('#class').on('change', function() {
                var id= this.value;
                var optiondata = '';

                $.ajax({
                    url: "{{ route('application_section') }}",
                    type: "GET",
                    data: {id : id},
                    dataType: "json",
                    success: function (data) {
                        $.each(data,function(index, value){
                            optiondata+= "<option value="+value.id+">"+value.name+"</option>";

                        });
                        $('#section').html(optiondata);
                    }
                });




            })



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