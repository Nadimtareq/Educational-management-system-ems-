@extends('layouts.backend.master')
@section('content')
    <form action="{{ route('notice_store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="uk-grid" data-uk-grid-margin>

            <div class="uk-width-medium-1-1">
                <div class="md-card">
                    <div class="md-card-content">
                        <h3 class="heading_a uk-margin-small-bottom">
                      New Notice
                        </h3>

                        <div class="uk-width-medium-1-3">
                            <select name="type" id="select_demo_2" class="md-input" data-uk-tooltip="{pos:'top'}" title="Select with tooltip">

                              @foreach($type as $item)
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                               @endforeach
                            </select>

                        </div>

                            <div class="uk-width-medium-1-3">
                                <label>Title</label>
                                <input required type="text" name="title" class="input-count md-input" id="input_counter" maxlength="60" />

                            @if($errors->has('title'))

                                <span style="color:red">{!!$errors->first('title')!!}</span>

                            @endif
                            </div>

                        <br/>  <br/>  <br/>
                        <div class="uk-width-medium-1-1">
                            <label>Description</label>
                            <br/>
                            <textarea required id="wysiwyg_ckeditor" name="desc" cols="30" rows="4" class="md-input"> </textarea>
                            @if($errors->has('desc'))

                                <span style="color:red">{!!$errors->first('desc')!!}</span>

                            @endif
                        </div>

                        <div class="uk-width-medium-1-2">
                            <div class="md-card">
                                <div class="md-card-content">
                                    <h3 class="heading_a uk-margin-small-bottom">
                                        Attach file
                                    </h3>
                                    <input name="notice_file" type="file" id="input-file-a" class="dropify" />
                                </div>
                            </div>
                        </div>
                        <br/>

                        <div class="uk-input-group ">
                            <button type="submit"  class="md-btn md-btn-success md-btn-wave-light waves-effect waves-button waves-light" >Save</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
@endsection

@section('custom_footer_js')
    <!-- ckeditor -->
    <script src="{{ asset('bower_components/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('bower_components/ckeditor/adapters/jquery.js') }}"></script>

    <!--  wysiwyg editors functions -->
    <script src="{{ asset('assets/js/pages/forms_wysiwyg.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom/dropify/dist/js/dropify.min.js') }}"></script>

    <!--  form file input functions -->
    <script src="{{ asset('assets/js/pages/forms_file_input.min.js') }}"></script>
    <!-- page specific plugins -->

@endsection

@section('custom_header_top_css')
    <link rel="stylesheet" href="{{ asset('assets/skins/dropify/css/dropify.css') }}">
@endsection