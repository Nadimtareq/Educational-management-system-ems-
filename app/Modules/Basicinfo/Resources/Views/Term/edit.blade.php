@extends('layouts.backend.master')

@section('title')
    Term
@endsection

@section('content')

    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{ route('term_update',$term->id) }}" method="post" class="uk-form-stacked" id="user_edit_form">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                {{ csrf_field() }}
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Edit Term</span></h2>
                                </div>
                            </div>
                            <div class="user_content">

                                <div class="uk-grid">
                                    <div class="uk-width-1-5">
                                        <div class="parsley-row">
                                            <label for="title">Title <span class="req"></span></label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2">
                                        <div class="parsley-row">
                                            <input type="text" value="{!! $term->title !!}" id="title" name="title" required class="md-input"  />
                                        </div>
                                    </div>
                                </div>

                                <div class="uk-grid">
                                    <div class="uk-width-1-5">
                                        <div class="parsley-row">
                                            <label for="description">Description</label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2">
                                        <div class="parsley-row">
                                            <textarea class="md-input" id="description" name="description" required cols="10" rows="3" data-parsley-trigger="keyup" >{!! $term->description !!}</textarea>
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

@endsection