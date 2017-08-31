@extends('layouts.backend.master')

@section('title')
    Class Teacher
@endsection

@section('content')
    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{ route('cteacher_update',$cteacher_single->id) }}"  method="post" class="uk-form-stacked" id="class_store">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                {{ csrf_field() }}
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Edit Class Teacher</span></h2>
                                </div>
                            </div>
                            <div class="user_content">

                                <div class="uk-grid">
                                    <div class="uk-width-1-4">
                                        <div class="parsley-row">
                                            <select name="class" id="class" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="Select class">
                                                <option value="">Select class</option>
                                                @foreach($class as $item)
                                                    @if($cteacher_single->classes_id==$item->id)
                                                        <option selected value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @else
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @if($errors->has('class'))

                                        <span style="color:red">class is Required</span>

                                    @endif
                                </div>

                                <div class="uk-grid">
                                    <div class="uk-width-medium-1-4">
                                        <select name="section" id="section" class="md-input" >
                                            <option value="" disabled selected hidden>Select...</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="uk-grid">
                                    <div class="uk-width-1-4">
                                        <div class="parsley-row">
                                            <select name="session_id" id="select_demo_5" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="Select session">
                                                <option value="">Select session</option>
                                                @foreach($session as $item)
                                                    @if($cteacher_single->sessions_id==$item->id)
                                                        <option selected value="{{ $item->id }}">{{ $item->title }}</option>
                                                    @else
                                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                    @endif
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
                                            <select name="user_id" id="select_demo_5" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="Select user">
                                                <option value="">Select Teacher</option>
                                                @foreach($cteacher as $item)
                                                    @if($cteacher_single->users_id==$item->id)
                                                        <option selected value="{{ $item->id }}">{{ $item->first_name }}</option>
                                                    @else
                                                        <option value="{{ $item->id }}">{{ $item->first_name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @if($errors->has('user_id'))

                                        <span style="color:red">Teacher is Required</span>

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
                                            <input type="text"  id="name" name="name" required class="md-input" />
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