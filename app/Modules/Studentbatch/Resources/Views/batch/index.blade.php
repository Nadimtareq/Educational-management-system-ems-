@extends('layouts.backend.master')

@section('title')
    Application Type
@endsection
@section('content')
    <div class="md-card">
        <div class="md-card-content">
            <h3 class="heading_a">Student Batch </h3>
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
        </div>
    </div>

    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <table id="t_dt_search" class="uk-table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Roll</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                </thead>



                <tbody id="dt_search">





                <script>

                    function deleterow(link) {
                        UIkit.modal.confirm('Are you sure?', function(){
                            window.location.href = link;
                        });
                    }
                </script>
                </tbody>
            </table>
            <div class="md-fab-wrapper">
                <a class="md-fab md-fab-accent" href="{{ route('studentbatch_create') }}" id="recordAdd">
                    <i class="material-icons"></i>
                </a>
            </div>
        </div>
    </div>
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script>



        $(document).ready(function(){

            $("#filter").on('click',function() {

                var stusection = $('#section').val();
                var stusession = $('#session_id').val();
                var stuclass = $('#class').val();
                if (stusection !== null && stusession !== null && stuclass !== null) {

                var data = '';
                $.ajax({
                    url: "{{ route('studentbatch_getAllStudent') }}",
                    type: "GET",
                    data: {stuclass: stuclass,stusession:stusession,stusection:stusection},
                    contentType: "application/json; charset=utf-8",
                    dataType: "html",
                    success: function (data, text) {

                        $('#dt_search').html(data);
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