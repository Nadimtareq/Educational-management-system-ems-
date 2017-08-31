@extends('layouts.backend.master')

@section('title')
   Edit Pagedetails
@endsection

@section('content')
    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{ route('page_detail_update',$pagedetail->id) }}" method="post" class="uk-form-stacked" id="user_edit_form">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                {{ csrf_field() }}
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Edit Pagedetails</span></h2>
                                </div>
                            </div>
                            <div class="user_content">
                                <div class="uk-margin-top">

                                    <div class="uk-grid" data-uk-grid-margin>

                                        <div class="uk-width-medium-2-6">
                                            <select name="type" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="customer_name" id="type" name="type">
                                                <option value=""> Type</option>
                                                @foreach($all as $item)
                                                    @if($item->id == $pagedetail->id)
                                                    <option selected value="{{$item->id }}">{{$item->pt_id }}</option>
                                                        @else
                                                        <option value="{{$item->id }}">{{$item->pt_id }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-grid">
                                        <div class="uk-width-1-7">
                                            <div class="parsley-row">
                                                <label for="title">Title<span class="req"></span></label>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-3">
                                            <div class="parsley-row">
                                                <input type="text" value="{!! $pagedetail->title !!}" id="title" name="title" required class="md-input" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-grid">
                                        <div class="uk-width-1-7">
                                            <div class="parsley-row">
                                                <label for="details">Details</label>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-3">
                                            <div class="parsley-row">
                                                <textarea class="md-input" id="details" name="details" required cols="10" rows="3" data-parsley-trigger="keyup" ></textarea>
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
                </div>

            </form>
        </div>
    </div>
    </div>
    </div>
    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent" href="#">
            <i class="material-icons">&#xE145;</i>
        </a>
    </div>
@endsection