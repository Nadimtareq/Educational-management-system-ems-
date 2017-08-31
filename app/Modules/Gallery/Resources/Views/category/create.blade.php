@extends('layouts.backend.master')
@section('content')
    <form action="{{ route('Gallery_cat_store') }}" method="post">
        {{ csrf_field() }}
        <div class="uk-grid" data-uk-grid-margin>

            <div class="uk-width-medium-1-1">
                <div class="md-card">
                    <div class="md-card-content">
                        <h3 class="heading_a uk-margin-small-bottom">
                       Gallery Category
                        </h3>



                            <div class="uk-width-medium-1-3">
                                <label>Name</label>
                                <input type="text" name="title" class="input-count md-input" id="input_counter" maxlength="60" />

                            @if($errors->has('title'))

                                <span style="color:red">{!!$errors->first('title')!!}</span>

                            @endif
                            </div>

                        <br/>  <br/>  <br/>
                        <div class="uk-width-medium-1-2">
                            <label>Description</label>
                            <textarea name="desc" cols="30" rows="4" class="md-input"> </textarea>
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