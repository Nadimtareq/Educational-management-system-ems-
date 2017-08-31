@extends('layouts.backend.master')
@section('content')
 <form action="{{ route('slider_store') }}" enctype="multipart/form-data" method="post">
     {{ csrf_field() }}
    <div class="uk-grid" data-uk-grid-margin>

        <div class="uk-width-medium-1-1">
            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a uk-margin-small-bottom">
                        @if($errors->has('img_url'))

                            <span style="color:red">{!!$errors->first('img_url')!!}</span>

                        @endif
                    </h3>
                    <input type="file" name="img_url" accept="image/*" id="input-file-d" class="dropify" />
                    <div class="uk-input-group">
                        <span class="uk-input-group-addon">
                            <input name="status" type="checkbox" data-md-icheck/></span>
                        <label>Title</label>
                        <input type="text" name="name" class="md-input" />
                        @if($errors->has('name'))

                            <span style="color:red">{!!$errors->first('name')!!}</span>

                        @endif

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
    <script src="{{ asset('assets/js/custom/dropify/dist/js/dropify.min.js') }}"></script>

    <!--  form file input functions -->
    <script src="{{ asset('assets/js/pages/forms_file_input.min.js') }}"></script>
@endsection

@section('custom_header_top_css')
    <link rel="stylesheet" href="{{ asset('assets/skins/dropify/css/dropify.css') }}">
@endsection