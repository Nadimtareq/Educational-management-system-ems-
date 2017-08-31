@extends('layouts.backend.master')

@section('title')
    Your Profile
@endsection
@section('content')
    <h6 class="heading_a uk-margin-bottom">Profile</h6>


    <form action="{{ route('basic_update') }}" method="post">
        <div class="md-card">
            <div class="md-card-content">
                <h3 class="heading_a">Input fields</h3>
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-1">



                        <div class="uk-form-row">
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-1-3">
                                    <div class="uk-form-row">
                                        <label>About</label>
                                        <textarea cols="30" name="about" rows="4" class="md-input">{{ $basic->Studentinfo->about  }}</textarea>
                                    </div>

                                </div>
                                <div class="uk-width-medium-1-3">
                                    <label>Permanent Address</label>
                                    <textarea readonly cols="30" name="per_add" rows="4" class="md-input">{{  $basic->Studentinfo->per_add }}</textarea>

                                </div>

                                <div class="uk-width-medium-1-3">
                                    <label>Present Address</label>
                                    <textarea cols="30" name="pre_add" rows="4" class="md-input">{{ $basic->Studentinfo->pre_add  }}</textarea>

                                </div>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-3">
                            <label>Religion</label>
                            <input readonly type="text" name ="religion" value="{{ $basic->Studentinfo->religion }}" class="md-input" />
                            @if ($errors->has('religion'))
                                <span style="color:red">{{ $errors->first('religion') }}</span>
                            @endif
                        </div>
                         </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-1-3">
                                    <div class="uk-form-row">
                                        <label>Varification Id</label>
                                        <input readonly type="text" name="v_id" value="{{$basic->Studentinfo->v_id }}" class="md-input label-fixed" />
                                    </div>

                                </div>
                                <div class="uk-width-medium-1-3">
                                    <label>Nationality</label>
                                    <input readonly type="text" name = "nationality" value="{{ $basic->Studentinfo->nationality  }}" class="md-input label-fixed" />

                                </div>
                                <div class="uk-width-medium-1-3">
                                    <label>Birth Date</label>
                                    <input readonly type="date" name = "birth_date" value="{{ $basic->Studentinfo->birth_date }}" class="md-input label-fixed" />

                                </div>

                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-1-3">
                                    <div class="uk-form-row">
                                        <label>Contact 1 </label>
                                        <textarea  cols="30" name="c_1" rows="4" class="md-input">{{ $basic->Studentinfo->c_1  }}</textarea>
                                    </div>

                                </div>
                                <div class="uk-width-medium-1-3">
                                    <div class="uk-form-row">
                                        <label>Contact 2 </label>
                                        <textarea readonly cols="30" name="c_2" rows="4" class="md-input">{{ $basic->Studentinfo->c_2  }}</textarea>
                                    </div>

                                </div>

                                <div class="uk-width-medium-1-3">
                                    <div class="uk-form-row">
                                        <label>Gurdian Name</label>
                                        <input readonly type="text" value="{{$basic->Studentinfo->gur_name }}" class="md-input label-fixed" />
                                    </div>

                                </div>
                            </div>
                        </div>
                                <div class="uk-form-row">
                                    <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-1-3">
                                    <div class="uk-form-row">
                                        <label>Gurdian Contact 1</label>
                                        <input readonly type="text" value="{{$basic->Studentinfo->gur_c1  }}" class="md-input label-fixed" />
                                    </div>

                                </div>
                                <div class="uk-width-medium-1-3">
                                    <div class="uk-form-row">
                                        <label>Gurdian Contact 2</label>
                                        <input readonly type="text" name="v_id" value="{{$basic->Studentinfo->gur_c2 }}" class="md-input label-fixed" />
                                    </div>

                                </div>
                                <div class="uk-width-medium-1-3">
                                    <div class="uk-form-row">
                                        <label> Gurdian Varification Id</label>
                                        <input readonly type="text" name="v_id" value="{{$basic->Studentinfo->v_id }}" class="md-input label-fixed" />
                                    </div>

                                </div>
                               </div>
                            </div>

                    </div>

                </div>
            <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-1-4 uk-width-medium-1-3">
                        <input readonly type="hidden" value="{{ $basic->id }}" name="user_id">
                        {{ csrf_field() }}
                        <span class="uk-input-group-addon pull-left"><button type="submit" class="md-btn" >Update</button></span>


                    </div>


                </div>


            </div>
        </div>
    </form>
@endsection

@section('custom_header_top_css')
    <link rel="stylesheet" href="{{ asset('bower_components/kendo-ui/styles/kendo.common-material.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('bower_components/kendo-ui/styles/kendo.material.min.css') }}" id="kendoCSS"/>
@endsection

@section('custom_footer_js')
    <script>
        // load parsley config (altair_admin_common.js)
        altair_forms.parsley_validation_config();
    </script>
    <script src="{{asset('bower_components/parsleyjs/dist/parsley.min.js')}}"></script>
    <script src="{{ asset('assets/js/pages/components_notifications.min.js') }} "></script>
    <script src="{{ asset('assets/js/kendoui_custom.min.js') }}"></script>

    <!--  kendoui functions -->
    <script src="{{ asset('assets/js/pages/kendoui.min.js') }}"></script>
@endsection