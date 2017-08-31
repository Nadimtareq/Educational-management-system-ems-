@extends('layouts.backend.master')

@section('title')
    Pagedetails
@endsection

@section('content')
    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{ route('page_detail_store') }}" method="post" class="uk-form-stacked" id="user_edit_form">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                {{ csrf_field() }}
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Add New Pagedetails</span></h2>
                                </div>
                            </div>
                            <div class="user_content">
                                <div class="uk-margin-top">

                                    <div class="uk-grid" data-uk-grid-margin>

                                        <div class="uk-width-medium-2-6">
                                            <select name="type" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="type" id="customer_name" name="customer_name">
                                                  <option value=""> Type</option>
                                                   @foreach($pagedetail as $item)
                                                    <option selected value="{{$item->id }}">{{$item->pt_id }}</option>
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
                                                <input type="text" id="title" name="title" required class="md-input" />
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