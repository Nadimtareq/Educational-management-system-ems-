
@extends('layouts.backend.master')

@section('title')
    Gallery
@endsection

@section('content')

    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{ route('gallery_update',$gallery->id) }}" method="post" enctype="multipart/form-data" class="uk-form-stacked" id="user_edit_form">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                {{ csrf_field() }}
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname"> Edit Gallery</span></h2>
                                </div>
                            </div>
                            <div class="user_content">
                                <div class="uk-margin-top">
                                    <div class="uk-grid" data-uk-grid-margin>

                                        <div class="uk-width-medium-2-6">
                                            <select data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="category" id="category" name="category">
                                                <option value="">category </option>
                                                @foreach($gct as $item)
                                                    @if($gallery->c_id==$item->id)
                                                    <option selected value="{{ $item->id }}">{{ $item->title }}</option>
                                                    @else
                                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                    @endif
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-3">
                                            <label for="user_edit_uname_control">title</label>
                                            <input class="md-input" value="{{$gallery->imag_name}}" type="text" id="user_edit_uname_control" name="title" />
                                        </div>

                                    </div>
                                    <div class="uk-grid uk-block" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-3">
                                            <div class="uk-width-medium-1-1 uk-margin-medium-bottom">
                                                <div class="uk-form-file uk-text-primary"
                                                     style="width: 200px; height: 30px; border-color: #ececec; border-style: dotted; text-align: center; ">
                                                    <p style="margin: 4px;">Attach File</p>
                                                    <input id="form-file"   name="imag_url" type="file">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
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


