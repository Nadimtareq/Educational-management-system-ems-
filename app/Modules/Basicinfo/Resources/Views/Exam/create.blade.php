@extends('layouts.backend.master')

@section('title')
    Add  Exam
@endsection

@section('content')

    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{ route('exam_store') }}"  method="post" class="uk-form-stacked" id="class_store">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                {{ csrf_field() }}
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Add New Exam</span></h2>
                                </div>
                            </div>
                            <div class="user_content">

                                <div class="uk-grid">
                                    <div class="uk-width-1-4">
                                        <div class="parsley-row">
                                            <select name="class" id="class" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="select class">
                                                <option value="">Select Class</option>
                                                @foreach($class as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    @if($errors->has('class'))

                                        <span style="color:red">class is Required</span>

                                    @endif
                                </div>
                                    <div class="uk-width-medium-1-4">
                                        <select name="section" id="section" class="md-input" >
                                            <option value="" disabled selected hidden>Select...</option>
                                        </select>
                                    </div>


                                <div class="uk-grid">
                                    <div class="uk-width-1-4">
                                        <div class="parsley-row">
                                            <select name="session_id" id="select_demo_5" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}"  title="select session">
                                                <option value="">Select session</option>
                                                @foreach($session as $item)
                                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    @if($errors->has('session_id'))

                                        <span style="color:red">session is Required</span>

                                    @endif
                                </div>
                                <div class="uk-grid">
                                    <div class="uk-width-1-4">
                                        <div class="parsley-row">
                                            <select name="term" id="select_demo_5" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}"  title="select term">
                                                <option value="">Select term</option>
                                                @foreach($term as $item)
                                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    @if($errors->has('term'))

                                        <span style="color:red">term is Required</span>

                                    @endif
                                </div>
                                <div class="uk-grid">
                                    <div class="uk-width-1-7">
                                        <div class="parsley-row">
                                            <label for="name">Name <span class="req"></span></label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <input type="text" id="name" name="name" required class="md-input" />
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-grid">
                                    <div class="uk-width-1-1 uk-float-right">
                                        <button type="submit" class="md-btn md-btn-primary" >Submit</button>
                                        <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
    </div>

    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script>

        $(document).ready(function(){
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
                        $("#section").html(optiondata);


                    }
                });

            });

                   });

    </script>
@endsection