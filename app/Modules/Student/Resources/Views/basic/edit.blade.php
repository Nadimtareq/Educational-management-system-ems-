@extends('layouts.backend.master')

@section('title')
    Edit Profile
@endsection

@section('content')
    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{ route('basic_update',$basic->id) }}"  method="post" class="uk-form-stacked" id="class_store">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                {{ csrf_field() }}
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Edit Profile</span></h2>
                                </div>
                            </div>
                            <div class="user_content">

                                <div class="uk-grid">
                                    <div class="uk-width-1-6">
                                        <label for="user_edit_personal_info_control">About</label>
                                        <textarea class="md-input" name="about" id="user_edit_personal_info_control" cols="30" rows="4">{{$basic->about}} </textarea>
                                    </div>
                                    @if($errors->has('about'))

                                        <span style="color:red">{!!$errors->first('about')!!}</span>

                                    @endif
                                </div>
                                <div class="uk-grid">
                                    <div class="uk-width-1-7">
                                        <div class="parsley-row">
                                            <label for="course_name">Contact 1<span class="req"></span></label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <input type="text"  value="{{$basic->c_1}}"  id="contact1" name="contact1" required class="md-input" />
                                        </div>
                                    </div>
                                    @if($errors->has('contact1'))

                                        <span style="color:red">{!!$errors->first('contact1')!!}</span>

                                    @endif
                                </div>
                                <div class="uk-grid">
                                    <div class="uk-width-1-7">
                                        <div class="parsley-row">
                                            <label for="course_name">Present address<span class="req"></span></label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <input type="text"  value="{{$basic->pre_add}}" id="presentaddress" name="presentaddress" required class="md-input" />
                                        </div>
                                    </div>
                                    @if($errors->has('presentaddress'))

                                        <span style="color:red">{!!$errors->first('presentaddress')!!}</span>

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