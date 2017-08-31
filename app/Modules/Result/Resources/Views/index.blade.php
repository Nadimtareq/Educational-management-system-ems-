@extends('layouts.backend.master')

@section('title')

  Result

@endsection

@section('content')

    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{ route('result_create') }}" method="post" class="uk-form-stacked" id="user_edit_form">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                {{ csrf_field() }}
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Result </span></h2>
                                </div>
                            </div>
                            <div class="user_content">
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-2-6">
                                        <select id="exam_id" name="exam_id" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="class">
                                            <option value="">Select exam</option>
                                            @foreach($exams as $item)
                                                @if($exam_id == $item->id)
                                                    <option value="{{ $item->id }}" selected> {{ $item->name }} ({{ $item->classe->name }})({{ $item->term->title }})({{ $item->session->title }})</option>
                                                @else
                                                    <option value="{{ $item->id }}">{{ $item->name }} ({{ $item->classe->name }})({{ $item->term->title }})({{ $item->session->title }})</option>
                                                @endif
                                            @endforeach

                                        </select>

                                        @if($errors->has('exam_id'))

                                            <span style="color:red">exam is Required</span>

                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>

                                    <div class="uk-width-medium-2-6">
                                        <select name="subject_id" id="subject_id" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="subject" id="subject" name="subject">
                                            <option value="">Select subject</option>
                                            @foreach($subject as $item)
                                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                            @endforeach
                                        </select>

                                        @if($errors->has('subject'))

                                            <span style="color:red">subject is Required</span>

                                        @endif
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
            </form>
        </div>
    </div>

@endsection
@section('custom_footer_js')

    <script type="text/javascript">

        $('#exam_id').on('change',function(){
            var exam = $('#exam_id option:selected').val();
            if(exam == '')
            {
                var address = "result/0";
            }
            else
            {
                var address = exam;
            }
            window.location=address;
        });

    </script>
@endsection