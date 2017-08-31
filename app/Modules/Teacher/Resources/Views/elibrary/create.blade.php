@extends('layouts.backend.master')
@section('content')
    @include('layouts.backend.includes.teachermenu')
    <form action="{{ route('teacher_Elibrary_store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="uk-grid" data-uk-grid-margin>

            <div class="uk-width-medium-1-1">
                <div class="md-card">
                    <div class="md-card-content">
                        <h3 class="heading_a uk-margin-small-bottom">
                      New Elibray
                        </h3>



                            <div class="uk-width-medium-1-3">
                                <label>Title </label>
                                <input type="text" name="title" class="input-count md-input" id="input_counter" maxlength="60" />

                            @if($errors->has('title'))

                                <span style="color:red">{!!$errors->first('title')!!}</span>

                            @endif
                            </div>

                        <br/>  <br/>  <br/>
                        <div class="uk-width-medium-1-2">
                            <label>Description</label>
                            <textarea name="note" cols="30" rows="4" class="md-input"> </textarea>
                        </div>




                        <br/>
                        <div class="uk-width-medium-1-3">

                            <input type="file" name="f_url" class="input-count md-input" id="input_counter" maxlength="60" />

                            @if($errors->has('f_url'))

                                <span style="color:red">{!!$errors->first('f_url')!!}</span>

                            @endif
                        </div>
                        <br/>
                        <div class="uk-width-medium-1-3">

                            <select name="class" id="select_demo_2" class="md-input" data-uk-tooltip="{pos:'top'}" title="Select with tooltip">

                                @foreach($class as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="uk-input-group ">
                            <br/>
                            <button type="submit"   class="md-btn md-btn-success md-btn-wave-light waves-effect waves-button waves-light" >Save</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
@endsection




@section('title')
    NEW Teacher Elibrary
@endsection

@section('custom_footer_js')
    <script>
        // load parsley config (altair_admin_common.js)
        altair_forms.parsley_validation_config();
    </script>
    <script src="bower_components/parsleyjs/dist/parsley.min.js"></script>
    <script src="{{ asset('assets/js/pages/components_notifications.min.js') }} "></script>
    <script src="{{ asset('assets/js/kendoui_custom.min.js') }}"></script>

    <!--  kendoui functions -->
    <script src="{{ asset('assets/js/pages/kendoui.min.js') }}"></script>
@endsection

@section('custom_header_top_css')
    <link rel="stylesheet" href="{{ asset('bower_components/kendo-ui/styles/kendo.common-material.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('bower_components/kendo-ui/styles/kendo.material.min.css') }}" id="kendoCSS"/>
@endsection