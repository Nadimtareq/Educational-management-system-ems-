@extends('layouts.backend.master')

@section('title')
    Your Profile
@endsection
@section('content')
    <h6 class="heading_a uk-margin-bottom">Profile</h6>
    {{--<form action="{{ route('staff_index') }}" method="post">--}}
       <div class="md-card">
            <div class="md-card-content">
                {{--<h3 class="heading_a">Input fields</h3>--}}
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-1">


                        <div class="uk-form-row">
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-1-3">
                                    <div class="uk-form-row">
                                        <label>About</label>
                                        <textarea readonly cols="30" name="about" rows="4" class="md-input">{{ $st_basic->staffinfo->about }}</textarea>
                                    </div>

                                </div>
                                <div class="uk-width-medium-1-3">
                                    <label>Permanent Address</label>
                                    <textarea readonly cols="30" name="per_add" rows="4" class="md-input">{{ $st_basic->staffinfo->per_add }}</textarea>

                                </div>

                                <div class="uk-width-medium-1-3">
                                    <label>Present Address</label>
                                    <textarea readonly cols="30" name="pre_add" rows="4" class="md-input">{{$st_basic->staffinfo->pre_add }}</textarea>

                                </div>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-1-3">
                                    <div class="uk-form-row">
                                        <label>Varification Id</label>
                                        <input readonly type="text" name="v_id" value="{{ $st_basic->staffinfo->v_id }}" class="md-input label-fixed" />
                                    </div>

                                </div>
                                <div class="uk-width-medium-1-3">
                                    <label>Nationality</label>
                                    <input readonly type="text" name = "nationality" value="{{ $st_basic->staffinfo->nationality }}" class="md-input label-fixed" />

                                </div>
                                <div class="uk-width-medium-1-3">
                                    <label>Birth Date</label>
                                    <input readonly type="date" name = "birth_date" value="{{ $st_basic->staffinfo->birth_date }}" class="md-input label-fixed" />

                                </div>

                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-1-3">
                                    <div class="uk-form-row">
                                        <label>Contact 1 </label>
                                        <textarea readonly cols="30" name="c_1" rows="4" class="md-input">{{ $st_basic->staffinfo->c_1 }}</textarea>
                                    </div>
                                </div>
                                <div class="uk-width-medium-1-3">
                                    <div class="uk-form-row">
                                        <label>Contact 2 </label>
                                        <textarea readonly cols="30" name="c_2" rows="4" class="md-input">{{ $st_basic->staffinfo->c_2 }}</textarea>
                                    </div>

                                </div>
                                <div class="uk-width-medium-1-3">
                                    <label>Salary Info</label>
                                    <textarea readonly cols="30" name="salary_info" rows="4" class="md-input">{{ $st_basic->staffinfo->salary_info }}</textarea>


                                </div>
                                <div class="uk-width-medium-1-3">
                                    <label>Salary Note</label>
                                    <textarea readonly cols="30" name="salary_note" rows="4" class="md-input">{{ $st_basic->staffinfo->salary_note }}</textarea>

                                </div>

                            </div>
                        </div>

                        <div class="uk-form-row">
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-1-3">

                                    <label>Speacial Field 1</label>
                                    <input readonly type="text" name = "speacial" value="{{ $st_basic->staffinfo->fs_1 }}" class="md-input label-fixed" />
                                    {{--@if ($errors->has('speacial'))
                                        <span style="color:red">{{ $errors->first('speacial') }}</span>
                                    @endif--}}
                                </div>
                                <div class="uk-width-medium-1-3">

                                    <label>Special Field 2</label>
                                    <input readonly type="text" name ="fs_2" value="{{ $st_basic->staffinfo->fs_2 }}" class="md-input" />

                                </div>
                                <div class="uk-width-medium-1-3">

                                    <label>	Special Field 3</label>
                                    <input readonly type="text" name ="fs_3" value="{{ $st_basic->staffinfo->fs_3 }}" class="md-input" />

                                </div>

                            </div>
                        </div>
                            <div class="uk-form-row">
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-3">
                                        <label>Religion</label>
                                        <input readonly type="text" name ="religion" value="{{ $st_basic->staffinfo->religion }}" class="md-input" />
                                        @if ($errors->has('religion'))
                                            <span style="color:red">{{ $errors->first('religion') }}</span>
                                        @endif
                                    </div>
                                    <div class="uk-width-medium-1-3">
                                        <label>Designation</label>
                                        <input  readonly type="text" name ="designation" value="{{ $st_basic->staffinfo->desination }}" class="md-input label-fixed" />
                                        @if ($errors->has('designation'))
                                            <span style="color:red">{{ $errors->first('designation') }}</span>
                                        @endif
                                    </div>
                                    <div class="uk-width-medium-1-3">
                                        <label>Education level</label>
                                        <input readonly type="text" name ="eud_level" value="{{ $st_basic->staffinfo->edu_level }}" class="md-input" />
                                    </div>
                                </div>
                            </div>
                        <div class="uk-form-row">
                            <div class="uk-grid" data-uk-grid-margin>

                                <div class="uk-width-medium-1-3">
                                    <label style="position:relative; top:-2px;">Joining Date</label>
                                    <input readonly type="date" name ="join_date" value="{{ $st_basic->staffinfo->join_date	 }}" class="md-input" />


                                </div>
                                <div class="uk-width-medium-1-3">
                                    <label style="position:relative; top:-2px;">Ending Date</label>
                                    <input readonly type="date" name ="ending_date" value="{{ $st_basic->staffinfo->ending_date }}" class="md-input" />

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                {{--<div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-1-4 uk-width-medium-1-3">
                        <input readonly type="hidden" value="{{ $teacher->id }}" name="user_id">
                        {{ csrf_field() }}
                        <span class="uk-input-group-addon pull-left"><button type="submit" class="md-btn" >Update</button></span>
                        @if($teacher->teacherinfo->CreatedBy)
                            <h5 align="right">Created By {{ $teacher->teacherinfo->CreatedBy }}</h5>
                        @endif

                    </div>


                </div>--}}


            </div>
        </div>
    </div>
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
    <script src="bower_components/parsleyjs/dist/parsley.min.js"></script>
    <script src="{{ asset('assets/js/pages/components_notifications.min.js') }} "></script>
    <script src="{{ asset('assets/js/kendoui_custom.min.js') }}"></script>

    <!--  kendoui functions -->
    <script src="{{ asset('assets/js/pages/kendoui.min.js') }}"></script>
@endsection