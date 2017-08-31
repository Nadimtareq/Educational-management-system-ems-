@extends('layouts.backend.master')
@section('content')
  <form action="{{ route('certificate_store') }}" method="post">
        {{ csrf_field() }}
        <div class="uk-grid" data-uk-grid-margin>

            <div class="uk-width-medium-1-1">
                <div class="md-card">
                    <div class="md-card-content">
                        <h3 class="heading_a">New Cerficate </h3>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-3">
                              <select name="ctype" id="select_demo_1" class="md-input">
                                    <option value="" disabled selected hidden>Select...</option>
                                    @foreach( $ctype as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                  @endforeach
                                </select>
                                <span class="uk-form-help-block">Type</span>
                            </div>
                            <div class="uk-width-medium-1-3">

                            <select name="class" id="class"  class="md-input" data-uk-tooltip="{pos:'top'}" title="Select with tooltip">
                                <option value="" disabled selected hidden>Select...</option>
                                @foreach($class as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <span class="uk-form-help-block">Class</span>
                            </div>
                            <div class="uk-width-medium-1-3">
                                <select name="section" id="section" class="md-input" >
                                    <option value="" disabled selected hidden>Select...</option>
                                    @foreach($section as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <span class="uk-form-help-block">Section</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md-card">
                    <div class="md-card-content">

                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-3">
                            <select name="session_id" id="select_demo_1" class="md-input">
                                    <option value="" disabled selected hidden>Select...</option>
                              @foreach($session as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                                <span class="uk-form-help-block">Session</span>
                            </div>

                            <div class="uk-width-medium-1-3">


                                <input name="Roll" type="text" class="md-input" />
                                <span class="uk-form-help-block">Student Roll</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md-card">
                    <div class="md-card-content">

                        <h3 class="heading_a"> Details </h3>

                        <div class="uk-width-medium-1-1">
                            <textarea required id="wysiwyg_ckeditor" name="details" cols="30" rows="4" class="md-input"> </textarea>
                            @if($errors->has('details'))

                                <span style="color:red">{!!$errors->first('details')!!}</span>

                            @endif
                        </div>




                    </div>
                </div>
                <div class="md-card">
                    <div class="md-card-content">

                        <h3 class="heading_a"> Contact info </h3>

                        <div class="uk-width-medium-1-1">
                            <textarea required i name="contact_info" cols="30" rows="4" class="md-input"> </textarea>
                            @if($errors->has('contact_info'))

                                <span style="color:red">{!!$errors->first('contact_info')!!}</span>

                            @endif
                        </div>


                        <br/>

                        <div class="uk-input-group ">
                            <button type="submit"  class="md-btn md-btn-success md-btn-wave-light waves-effect waves-button waves-light" >Generate Certificate</button>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </form>
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script>

        $(document).ready(function(){

            $('#class').on('change', function() {
                var id= this.value;
                var optiondata = '';

                $.ajax({
                    url: "{{ route('application_section') }}",
                    type: "GET",
                    data: {id : id},
                    dataType: "json",
                    success: function (data) {
                        $.each(data,function(index, value){
                            optiondata+= "<option value="+value.id+">"+value.name+"</option>";

                        });
                        $('#section').html(optiondata);
                    }
                });




            })



            //end doc
        });

    </script>

@endsection

@section('title')
    Certificate
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