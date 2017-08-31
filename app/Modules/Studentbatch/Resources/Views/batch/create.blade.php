@extends('layouts.backend.master')
@section('content')


    <form action="{{ route('studentbatch_store') }}" method="post">
        {{ csrf_field() }}
        <div class="uk-grid" data-uk-grid-margin>

            <div class="uk-width-medium-1-1">
                <div class="md-card">
                    <div class="md-card-content">
                        <h3 class="heading_a">New Student Batch </h3>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-3">
                                <select name="session_id" id="select_demo_1" class="md-input">
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

                            <div class="uk-width-medium-1-3">

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
                            <div class="uk-width-medium-1-3">
                                <select name="section" id="section" class="md-input" >
                                    <option value="" disabled selected hidden>Select...</option>

                                </select>
                                <span class="uk-form-help-block">Section</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md-card">
                    <div class="md-card-content">

                        <div class="uk-grid" data-uk-grid-margin>

                            <div class="uk-width-medium-1-4">
                                <span id="notfound"></span>
                                <input type="text" id="studentinfo" class="md-input" />
                                <span class="uk-form-help-block">Student Email / Phone</span>
                                @if($errors->has('user_id'))

                                    <span style="color:red">User is Required</span>

                                @endif
                            </div>
                            <div class="uk-width-medium-1-4">


                                <input readonly name="student_name" type="text" id="Student_name" class="md-input" />
                                <span class="uk-form-help-block">Student Name</span>
                            </div>
                            <div class="uk-width-medium-1-4">


                                <input readonly name="student_email" type="text" id="student_email" class="md-input" />
                                <span class="uk-form-help-block">Student Email </span>
                            </div>
                            <div class="uk-width-medium-1-4">


                                <input readonly name="student_phone" type="text" id="student_phone" class="md-input" />
                                <span class="uk-form-help-block">Student Phone</span>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>

                            <div class="uk-width-medium-1-2">


                                <input name="Roll" type="text" class="md-input" />
                                <input name="user_id" type="hidden" id="user_id" class="md-input" />
                                <span class="uk-form-help-block">Student Roll</span>
                                @if($errors->has('Roll'))

                                    <span style="color:red">Roll is Required</span>

                                @endif
                            </div>

                        </div>
                    </div>
                </div>
                <div class="md-card">
                    <div class="md-card-content">
                        <div class="uk-grid" data-uk-grid-margin>

                            <div class="uk-width-medium-1-5">

                                <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-wave-light waves-effect waves-button waves-light">Add</button>

                            </div>
                            <div class="uk-width-medium-1-5">

                                <button type="reset" class="md-btn md-btn-primary md-btn-block md-btn-wave-light waves-effect waves-button waves-light">Reset</button>

                            </div>

                        </div>
                     </div>
                 </div>

            </div>

        </div>
    </form>

    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script>



        $(document).ready(function(){

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

@section('title')
   New Student Batch
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