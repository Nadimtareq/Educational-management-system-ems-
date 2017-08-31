@extends('layouts.backend.master')

@section('title')
   Public Result
@endsection

@section('content')

    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{ route('publicresult_store') }}"  method="post" class="uk-form-stacked" id="routine_store">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                {{ csrf_field() }}
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Add public result</span></h2>
                                </div>
                            </div>
                            <div class="user_content">

                                <div class="uk-grid">
                                    <div class="uk-width-1-7">
                                        <div class="parsley-row">
                                            <label for="title">Title *</label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-4">
                                        <div class="parsley-row">
                                            <input type="text" id="course_name" name="title"  class="md-input" />
                                        </div>
                                    </div>
                                    @if($errors->has('title'))

                                        <span style="color:green">{!!$errors->first('title')!!}</span>

                                    @endif
                                </div>

                                <div class="uk-grid">
                                    <div class="uk-width-1-1">
                                        <label for="title">Details *<span class="req"></span></label>
                                        <textarea class="ckeditor" name="details" id="ckeditor"></textarea>
                                    </div>
                                    @if($errors->has('details'))

                                        <span style="color:green">Details is Required</span>

                                    @endif
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
@endsection