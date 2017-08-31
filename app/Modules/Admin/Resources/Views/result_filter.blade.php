@extends('layouts.backend.master')

@section('title')
    Admin
@endsection
@section('content')
    <h4 class="heading_a uk-margin-bottom">Student Result</h4>

    <form action="{{ route('admin_result_filter') }}" method="post" >
        {{ csrf_field() }}
        <div class="md-card">
            <div class="md-card-content">
                <h3 class="heading_a">Search </h3>
                <div class="uk-grid" data-uk-grid-margin>

                    <div class="uk-width-medium-1-4">
                        <select name="sess_id" class="md-input" id="session" data-uk-tooltip="{pos:'top'}" title="Select with exam code">
                            <option value="" disabled selected hidden>Select...</option>
                         @foreach($sess as $item)
                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                        @endforeach
                        </select>

                        <span class="uk-form-help-block">With Session </span>
                    </div>
                    <div class="uk-width-medium-1-4">

                        <select name="class" id="class"  class="md-input" data-uk-tooltip="{pos:'top'}" title="Select with tooltip">
                            <option value="" disabled selected hidden>Select...</option>
                            @foreach($cls as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <span class="uk-form-help-block">Class</span>
                    </div>

                    <div class="uk-width-medium-1-4">
                        <select name="section" id="section" class="md-input" >
                            <option value="" disabled selected hidden>Select...</option>

                        </select>
                        <span class="uk-form-help-block">Section</span>
                    </div>

                    <div class="uk-width-medium-1-4">
                        <select name="subject_id" class="md-input" id="subject" data-uk-tooltip="{pos:'top'}" title="Select with subject">

                        </select>
                        <span class="uk-form-help-block">With subject </span>
                    </div>


                </div>
                 <div class="uk-grid" data-uk-grid-margin>
                     <div class="uk-width-medium-1-4">
                         <select  class="md-input" id="term" data-uk-tooltip="{pos:'top'}">
                             @foreach($term as $item)
                                 <option value="{{ $item->id }}">{{ $item->title }}</option>
                             @endforeach

                         </select>
                         <span class="uk-form-help-block">With Terms </span>
                     </div>

                     <div class="uk-width-medium-1-4">
                         <select name="exams_id" class="md-input" id="exams" data-uk-tooltip="{pos:'top'}" title="Select with subject">

                         </select>
                         <span class="uk-form-help-block">With Exams </span>
                     </div>


                     <div class="uk-width-medium-1-3">


                         <button class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light pull-left">Filter</button>


                     </div>
                 </div>
            </div>
        </div>
    </form>
    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Roll</th>
                    <th>Name</th>
                    <th>Obtained Mark</th>



                </tr>
                </thead>

                <tbody>

                @if($student)
                @foreach($student as $value)
                    <tr>
                        <td width="40%">{{ $value->student_roll }}</td>
                        <td width="40%"><input name="user_id[]" type="hidden" value="{{ $value->id }}"> {{ $value->user->first_name }}</td>
                        <td width="12%" align="right">{{ $value->mark }}</td>
                    </tr>
                @endforeach
                @endif

                </tbody>
            </table>

        </div>
    </div>

    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script>

        $(document).ready(function(){

            $('#class').on('change', function() {
                var id= this.value;
                var optiondata = '';
                var subject = '';


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



              // subject

                $.ajax({
                    url: "{{ route('admin_result_subject') }}",
                    type: "GET",
                    data: {id : id},
                    dataType: "json",
                    success: function (data) {

                        $.each(data,function(index, value){
                            subject+= "<option value="+value.id+">"+value.title+"</option>";

                        });
                        $('#subject').html(subject);
                    }
                });




            })

            $('#term').on('change', function() {
                var id = this.value;
                var cls = $( "#class" ).val();

                var sess = $( "#session" ).val();

                var section = $( "#section" ).val();
                var exam ='';

              if(sess && section && cls){

                $.ajax({
                    url: "{{ route('admin_result_exam') }}",
                    type: "GET",
                    data: {id: id,cls:cls,sess:sess,section:section},
                    dataType: "json",
                    success: function (data,status) {

                        $.each(data, function (index, value) {
                            exam += "<option value=" + value.id + ">" + value.name + "</option>";

                        });
                        $('#exams').html(exam);
                    }
                });

              }
            })


            //end doc
        });

    </script>
@endsection


@section('custom_footer_js')
    <!-- page specific plugins -->



    <script src="{{ asset('assets/js/pages/components_notifications.min.js') }} "></script>


@endsection
