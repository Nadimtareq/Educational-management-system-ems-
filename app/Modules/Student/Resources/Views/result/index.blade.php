@extends('layouts.backend.master')

@section('title')
    Result
@endsection

@section('content')

    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
    <div class="uk-width-large-10-10">
        <form action="{{ route('student_result_show') }}" class="uk-form-stacked" id="user_edit_form" method="post" >
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-large-10-10">
                    <div class="md-card">
                        <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                            {{ csrf_field() }}
                            <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            </div>
                            <div class="user_heading_content">
                                <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Student result</span></h2>
                            </div>
                        </div>
                        <div class="user_content">
                            <div class="uk-margin-top">
                                <div class="uk-grid">
                                    <div class="uk-width-1-7">
                                        <div class="parsley-row">
                                            <label for="course_name">Class<span></span></label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <select demo="select_demo_4" id="class" name="class" data-md-selectize>
                                                <option value="">Select Class</option>
                                                @foreach($class as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-grid">
                                    <div class="uk-width-1-7">
                                        <div class="parsley-row">
                                            <label for="course_name">Session<span></span></label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <select demo ="select_demo_4" id="session" name="session" Session data-md-selectize>
                                                <option value="">Select session</option>
                                                @foreach($session as $item)
                                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-grid">
                                    <div class="uk-width-1-7">
                                        <div class="parsley-row">
                                            <label for="course_name">Section<span></span></label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <select demo="select_demo_4" name="section" id="section" data-md-selectize>
                                                <option value="">Select section</option>
                                                @foreach($section as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-grid">
                                    <div class="uk-width-1-7">
                                        <div class="parsley-row">
                                            <label for="course_name">Term<span></span></label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <select demo="select_demo_4" name="term" id="term" data-md-selectize>
                                                <option value="">Select term</option>
                                                @foreach($term as $item)
                                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-grid">
                                    <div class="uk-width-1-7">
                                        <div class="parsley-row">
                                            <label for="course_name">Exam<span></span></label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <select demo="select_demo_4" name="exam" data-md-selectize>
                                                <option value="">Select exam</option>
                                                @foreach($exam as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-grid">
                                    <div class="uk-width-1-1 uk-float-right">
                                        <button type="submit" class="md-btn md-btn-primary" >Submit</button>
                                        <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                                    </div>
                                </div>
                                {{--<div class="uk-overflow-container uk-margin-bottom">
                                    <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_pager_filter">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th data-priority="3">Subject</th>
                                            <th data-priority="1">Obtained mark</th>
                                            <th data-priority="2">Highest Mark</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>bangla  </td>
                                                <td>50  </td>
                                                <td>70  </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}
        </form>
    </div>
</div>

{{--<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
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
                    $('#section').html(optiondata);
                }
            });

        })

    });
</script>--}}

@endsection