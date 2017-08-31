@extends('layouts.backend.master')
@section('title')
    Edit Notice
@endsection
@section('content')
    <form action="{{ route('notice_update') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="uk-grid" data-uk-grid-margin>

            <div class="uk-width-medium-1-1">
                <div class="md-card">
                    <div class="md-card-content">
                        <h3 class="heading_a uk-margin-small-bottom">
                            Edit Notice
                        </h3>

                        <div class="uk-width-medium-1-3">
                            <select name="type" id="select_demo_2" class="md-input" data-uk-tooltip="{pos:'top'}" title="Select with tooltip">

                                @foreach($type as $item)
                                    @if($item->title==$notice->NoticeType->title)
                                    <option selected value="{{ $item->id }}">{{ $item->title }}</option>
                                    @else
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endif

                                @endforeach
                            </select>

                        </div>
                        <br/>
                        <input type="hidden" name="notice_id" value="{{ $notice->id }}" />

                        <div class="uk-width-medium-1-3">
                            <label>Title</label>
                            <br/>
                            <input required type="text" value="{{ $notice->title }}" name="title" class="input-count md-input" id="input_counter" maxlength="60" />

                            @if($errors->has('title'))

                                <span style="color:red">{!!$errors->first('title')!!}</span>

                            @endif
                        </div>

                        <br/>  <br/>  <br/>
                        <div class="uk-width-medium-1-1">
                            <label>Description</label>
                            <br/>
                            <textarea required id="wysiwyg_ckeditor" name="desc" cols="30" rows="4" class="md-input"> {{ $notice->details }}</textarea>
                            @if($errors->has('desc'))

                                <span style="color:red">{!!$errors->first('desc')!!}</span>

                            @endif
                        </div>

                        <div class="uk-width-medium-1-1">
                            <div class="md-card">
                                <div class="md-card-content">
                                    <h3 class="heading_a uk-margin-small-bottom">
                                        Attach file
                                    </h3>
                                    <input name="notice_file"  type="file" id="input-file-a" class="dropify" />
                                </div>
                                <div class="md-card-content">
                                    @php
                                        $ext = pathinfo(asset($notice->file), PATHINFO_EXTENSION);
                                        $ext = strtolower($ext);
                                    @endphp
                                    <h3 class="heading_a uk-margin-small-bottom">
                                    @if($ext=="jpeg" ||$ext=="png"|| $ext=="jpg"|| $ext=="gif")
                                    <img src="{{ asset($notice->file) }}" height="300"  width="400" />
                                    @elseif($ext=='')
                                        No attachement
                                    @else
                                      <a download target="_blank" href="{{ asset($notice->file) }}" /> Download Attachement </a>
                                    @endif
                                    </h3>
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