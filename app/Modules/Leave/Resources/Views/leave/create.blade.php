@extends('layouts.backend.master')

@section('title')
    Leave
@endsection

@section('content')

    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{ route('leave_store') }}"  method="post" class="uk-form-stacked" id="class_store">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                {{ csrf_field() }}
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Add New Leave</span></h2>
                                </div>
                            </div>
                            <div class="user_content">

                                <div class="uk-grid">
                                    <div class="uk-width-1-8">
                                        <div class="parsley-row">
                                            <label for="title">User<span class="req"></span></label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-4">
                                        <div class="parsley-row">
                                            <input type="text" id="id" name="name" required class="md-input"  />
                                        </div>
                                    </div>
                                    @if($errors->has('name'))

                                        <span style="color:red">{!!$errors->first('user_id')!!}</span>

                                    @endif
                                </div>
                                <div class="uk-grid">
                                    <div class="uk-width-1-3">
                                        <label for="start_date">Start date</label>
                                        <input class="md-input" type="text" id="start_date" name="start_date" data-uk-datepicker="{format:'YYYY-MM-DD'}">
                                    </div>
                                    @if($errors->has('start_date'))

                                        <span style="color:red">{!!$errors->first('start_date')!!}</span>

                                    @endif
                                </div>
                                <div class="uk-grid">
                                    <div class="uk-width-1-3">
                                        <label for="end_date">End date</label>
                                        <input class="md-input" type="text" id="end_date" name="end_date" data-uk-datepicker="{format:'YYYY-MM-DD'}">
                                    </div>
                                    @if($errors->has('end_date'))

                                        <span style="color:red">{!!$errors->first('end_date')!!}</span>

                                    @endif
                                </div>
                                <div class="uk-grid">
                                    <div class="uk-width-1-3">
                                        <label for="user_edit_personal_info_control">Reason</label>
                                        <textarea class="md-input" name="reason" id="user_edit_personal_info_control" cols="30" rows="4"></textarea>
                                    </div>
                                    @if($errors->has('reason'))

                                        <span style="color:red">{!!$errors->first('reason')!!}</span>

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