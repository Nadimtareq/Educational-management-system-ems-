@extends('layouts.backend.master')

@section('title')
   Edit Page
@endsection

@section('content')
    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
<<<<<<< HEAD
            <form action="{{ route('page_update',$page->id) }}" method="post" class="uk-form-stacked" id="user_edit_form">
=======
            <form action="{{ route('page_update',$page->id) }}"  method="post" class="uk-form-stacked" id="class_store">
>>>>>>> 687179c5753d66f333fb09f334bdeecd00c137de
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                {{ csrf_field() }}
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Edit Page</span></h2>
                                </div>
                            </div>
                            <div class="user_content">
<<<<<<< HEAD
                                
                                   
                                    <div class="uk-grid">
                                        <div class="uk-width-1-7">
                                            <div class="parsley-row">
                                                <label for="title">Title<span class="req"></span></label>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-3">
                                            <div class="parsley-row">
                                                <input type="text" value="{!! $page->   title !!}" id="title" name="title" required class="md-input" />
                                            </div>
                                        </div>
                                    </div>
                                       
                                    

                                    <div class="uk-grid">
                                        <div class="uk-width-1-1 uk-float-right">
                                            <button type="submit" class="md-btn md-btn-primary" >Submit</button>
                                            <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                                        </div>
=======

                                <div class="uk-grid">
                                    <div class="uk-width-1-7">
                                        <div class="parsley-row">
                                            <label for="title">Title<span class="req"></span></label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="parsley-row">
                                            <input type="text" id="title"  value="{!! $page->title !!}" name="title" required class="md-input"  />
                                        </div>
                                    </div>
                                </div>

                                <div class="uk-grid">
                                    <div class="uk-width-1-1 uk-float-right">
                                        <button type="submit" class="md-btn md-btn-primary" >Submit</button>
                                        <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
>>>>>>> 687179c5753d66f333fb09f334bdeecd00c137de
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD

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
=======
        </form>
    </div>
    </div>

>>>>>>> 687179c5753d66f333fb09f334bdeecd00c137de
@endsection