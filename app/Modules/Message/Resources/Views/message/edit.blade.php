@extends('layouts.backend.master')

@section('title')
 Edit Message
@endsection

@section('content')

    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{ route('message_update', $message->id ) }}" method="post" class="uk-form-stacked" id="user_edit_form">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                {{ csrf_field() }}
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Edit Message</span></h2>
                                </div>
                            </div>
                            <div class="user_content">
                                <div class="uk-grid" data-uk-grid-margin>

                                    <div class="uk-width-medium-2-6">
                                        <select name="type" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="type" id="customer_name" name="type"
                                            <option value="1">type 1</option>
                                            <option value="2">type 2</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="uk-grid">
                                    <div class="uk-width-1-7">
                                        <div class="parsley-row">
                                            <label for="title">Title<span class="req"></span></label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-4">
                                        <div class="parsley-row">
                                            <input type="text" value="{!! $message->title!!}" id="title" name="title" required class="md-input"  />
                                        </div>
                                    </div>
                                    @if($errors->has('title'))

                                        <span style="color:red">Title is Required</span>

                                    @endif
                                </div>
                                <div class="uk-grid">
                                    <div class="uk-width-1-3">
                                        <label for="user_edit_personal_info_control">Message</label>
                                        <textarea class="md-input" name="message" id="user_edit_personal_info_control" cols="30" rows="4">{!! $message->message !!}</textarea>
                                    </div>
                                    @if($errors->has('message'))

                                        <span style="color:red">message is Required</span>

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
        </div>
        </form>
    </div>
    </div>



@endsection