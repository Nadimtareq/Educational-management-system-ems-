@extends('layouts.backend.master')

@section('title')
    Edit subject
@endsection

@section('content')

    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{ route('subject_update',$subject->id) }}" method="post" class="uk-form-stacked" id="user_edit_form">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                {{ csrf_field() }}
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Edit Subject</span></h2>
                                </div>
                            </div>
                            <div class="user_content">

                                <div class="uk-grid">
                                    <div class="uk-width-1-7">
                                        <div class="parsley-row">
                                            <label for="title">Title <span class="req"></span></label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-4">
                                        <div class="parsley-row">
                                            <input type="text" value="{{$subject->title}}" id="title" name="title" required class="md-input"  />
                                        </div>
                                    </div>
                                    @if($errors->has('title'))

                                        <span style="color:red">class is Required</span>

                                    @endif
                                </div>

                                <div class="uk-grid">
                                    <div class="uk-width-medium-1-4">
                                        <div class="parsley-row">
                                            <select name="class" id="select_demo_5" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="Select class">
                                                <option value="">Select Class</option>
                                                @foreach($class as $item)

                                                   @if($item->id==$subject->classes_id)
                                                    <option selected value="{{ $item->id }}">{{ $item->name }} </option>
                                                    @else
                                                    <option  value="{{ $item->id }}">{{ $item->name }}</option>

                                              
                                                    @endif
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    @if($errors->has('class'))

                                        <span style="color:red">class is Required</span>

                                    @endif
                                </div>
                                <div class="uk-grid">
                                    <div class="uk-width-1-6">
                                        <label for="user_edit_personal_info_control">description</label>
                                        <textarea class="md-input" name="description" id="user_edit_personal_info_control" cols="30" rows="4">{{$subject->description}}</textarea>
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
