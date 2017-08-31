@extends('layouts.backend.master')
@section('content')
    <form action="{{ route('Elibrary_store') }}" method="post">
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
                            <label>File URL / LINK</label>
                            <input type="url" name="f_url" class="input-count md-input" id="input_counter" maxlength="60" />

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
                            <button type="submit"  class="md-btn md-btn-success md-btn-wave-light waves-effect waves-button waves-light" >Save</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
@endsection

@section('custom_footer_js')

@endsection

@section('custom_header_top_css')

@endsection

@section('title')
    NEW Elibrary
@endsection