@extends('layouts.backend.master')

@section('title')
    Routine
@endsection

@section('content')

    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{ route('routine_update',$routine->id) }}"  method="post" class="uk-form-stacked" id="routine_edit">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                {{ csrf_field() }}
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Edit Routine</span></h2>
                                </div>
                            </div>
                            <div class="user_content">

                                <div class="uk-grid">
                                    <div class="uk-width-1-7">
                                        <div class="parsley-row">
                                            <label for="type">Type <span class="req"></span></label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-4">
                                        <div class="parsley-row">
                                            <select name="type"  id="select_demo_5" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="Select class">
                                               {{-- <option value="">Type</option>--}}

                                                 @if($routine->type==1 )
                                                <option selected value="1">class</option>
                                                    <option value="2">exam</option>
                                                @else
                                                <option selected  value="2">exam</option>
                                                    <option value="1">class</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                   {{-- @if($errors->has('type'))

                                        <span style="color:red">Type is Required</span>

                                    @endif--}}
                                </div>

                                <div class="uk-grid">
                                    <div class="uk-width-1-7">
                                        <div class="parsley-row">
                                            <label for="title">Class <span class="req"></span></label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-4">
                                        <div class="parsley-row">
                                            <select name="class" id="select_demo_5" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="Select class">
                                                <option value="">Select Class</option>
                                                @foreach($class as $item)
                                                  @if($item->id==$routine->classes_id)
                                                    <option selected value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @else
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endif
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    {{--@if($errors->has('class'))

                                        <span style="color:red">class is Required</span>

                                    @endif--}}
                                </div>

                                <div class="uk-grid">
                                    <div class="uk-width-1-1">
                                        <label for="title">Details<span class="req"></span></label>
                                        <textarea class="ckeditor" name="details" id="ckeditor">{!! $routine->details !!}</textarea>
                                    </div>

                                </div>

                                <br>
                                <br>
                                <br>

                                <hr class="uk-grid-divider">
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-large-1-3">
                                        <span class="uk-text-muted uk-text-small">Created By</span>
                                    </div>
                                    <div class="uk-width-large-2-3">
                                        <span class="uk-text-large uk-text-middle">{!! isset($routine->createdBy->first_name) ? $routine->createdBy->first_name:''  !!}</span>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-large-1-3">
                                        <span class="uk-text-muted uk-text-small">Updated By</span>
                                    </div>
                                    <div class="uk-width-large-2-3">
                                        <span class="uk-text-large uk-text-middle">{!! isset($routine->updatedBy->first_name) ? $routine->updatedBy->first_name:''  !!}</span>
                                    </div>
                                </div>


                                <hr class="uk-grid-divider">
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-large-1-3">
                                        <span class="uk-text-muted uk-text-small">Created At</span>
                                    </div>
                                    <div class="uk-width-large-2-3">
                                        <span class="uk-text-large uk-text-middle">{!! isset($routine->created_at) ? $routine->created_at:''  !!}</span>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-large-1-3">
                                        <span class="uk-text-muted uk-text-small">Updated At</span>
                                    </div>
                                    <div class="uk-width-large-2-3">
                                        <span class="uk-text-large uk-text-middle">{!! isset($routine->updated_at) ? $routine->updated_at:''  !!}</span>
                                    </div>
                                </div>

                                <br>
                                <br>
                                <hr>
                                <br>
                                <br>
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