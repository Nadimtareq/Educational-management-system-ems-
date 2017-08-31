@extends('layouts.backend.master')
@section('title')
    Notice Details
@endsection
@section('content')


        <div class="uk-grid" data-uk-grid-margin>

            <div class="uk-width-medium-1-1">
                <div class="md-card">
                    <div class="md-card-content">
                        <h3 class="heading_a uk-margin-small-bottom">
                             Notice Details
                        </h3>
                      <hr/>
                        <div class="uk-width-medium-1-1">
                            <label>Notice Type :</label>
                           {{ $notice->NoticeType->title }}
                        </div>


                        <div class="uk-width-medium-1-1">
                            <label>Title : {{ $notice->title }}</label>




                        </div>


                        <div class="uk-width-medium-1-1">
                            <label>Description :</label>
                            <br/>
                            <textarea readonly id="wysiwyg_ckeditor" name="desc" class="md-input"> {{ $notice->details }}</textarea>

                        </div>

                        <div class="uk-width-medium-1-1">
                            <div class="md-card">

                                <div class="md-card-content">
                                    @php
                                        $ext = pathinfo(asset($notice->file), PATHINFO_EXTENSION);
                                        $ext = strtolower($ext);
                                    @endphp
                                    <h3 class="heading_a uk-margin-small-bottom">
                                        @if($ext=="jpeg" ||$ext=="png"|| $ext=="jpg"|| $ext=="gif")
                                            <img  src="{{ asset($notice->file) }}" height="300"  width="400" />
                                        @elseif($ext=='')
                                            No attachement
                                        @else
                                            <a  download target="_blank" href="{{ asset($notice->file) }}" /> Download Attachement </a>
                                        @endif
                                    </h3>
                                    <h6 align="right">Created By {{ $notice->CreatedBy->first_name }}</h6>
                                    @if($notice->UpdatedBy->first_name)
                                    <h6 align="right"> Updated By {{ $notice->UpdatedBy->first_name }}</h6>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <br/>




                    </div>
                </div>
            </div>

        </div>

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