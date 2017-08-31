@extends('layouts.backend.master')

@section('title')
    Staff Users Edit
@endsection
@section('content')
    <h4 class="heading_a uk-margin-bottom">Staff Users Edit</h4>
<form action="{{ route('user_staff_update') }}" method="post">
    <div class="md-card">
        <div class="md-card-content">
            <h3 class="heading_a">Input fields</h3>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-1">
                    <div class="uk-form-row">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-3">
                                <label>Name</label>
                                <input type="text" name ="name" value="{{ $staff->first_name }}" class="md-input" />
                                @if ($errors->has('name'))
                                    <span style="color:red">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Email</label>
                                <input type="email" name = "email" value="{{ $staff->email }}" class="md-input label-fixed" />
                                @if ($errors->has('email'))
                                    <span style="color:red">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Phone</label>
                                <input type="text" name = "contact" value="{{ $staff->staffinfo->c_1 }}" class="md-input label-fixed" />
                                @if ($errors->has('contact'))
                                    <span style="color:red">{{ $errors->first('contact') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="uk-form-row">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-3">
                                <label>Religion</label>
                                <input type="text" name ="religion" value="{{ $staff->staffinfo->religion }}" class="md-input" />
                                @if ($errors->has('religion'))
                                    <span style="color:red">{{ $errors->first('religion') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Designation</label>
                                <input type="text" name = "designation" value="{{ $staff->staffinfo->desination }}" class="md-input label-fixed" />
                                @if ($errors->has('designation'))
                                    <span style="color:red">{{ $errors->first('designation') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Education level</label>
                                <input type="text" name ="edu_level" value="{{ $staff->staffinfo->edu_level	 }}" class="md-input" />




                            </div>

                        </div>
                    </div>

                    <div class="uk-form-row">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-3">
                                <div class="uk-form-row">
                                    <label>About</label>
                                    <textarea cols="30" name="about" rows="4" class="md-input">{{ $staff->staffinfo->about }}</textarea>
                                </div>

                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Permanent Address</label>
                                <textarea cols="30" name="per_add" rows="4" class="md-input">{{ $staff->staffinfo->per_add }}</textarea>

                            </div>

                            <div class="uk-width-medium-1-3">
                                <label>Present Address</label>
                                <textarea cols="30" name="pre_add" rows="4" class="md-input">{{ $staff->staffinfo->pre_add }}</textarea>

                            </div>
                        </div>
                    </div>
                    <div class="uk-form-row">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-3">
                                <div class="uk-form-row">
                                    <label>Varification Id</label>
                                    <input type="text" name="v_id" value="{{ $staff->staffinfo->v_id }}" class="md-input label-fixed" />
                                </div>

                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Nationality</label>
                                <input type="text" name = "nationality" value="{{ $staff->staffinfo->nationality }}" class="md-input label-fixed" />

                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Birth Date</label>
                                <input type="date" name = "birth_date" value="{{ $staff->staffinfo->birth_date }}" class="md-input label-fixed" />

                            </div>

                        </div>
                    </div>
                    <div class="uk-form-row">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-3">
                                <div class="uk-form-row">
                                    <label>Contact 2 </label>
                                    <textarea cols="30" name="c_2" rows="4" class="md-input">{{ $staff->staffinfo->c_2 }}</textarea>
                                </div>

                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Salary Info</label>
                                <textarea cols="30" name="salary_info" rows="4" class="md-input">{{ $staff->staffinfo->salary_info }}</textarea>


                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Salary Note</label>
                                <textarea cols="30" name="salary_note" rows="4" class="md-input">{{ $staff->staffinfo->salary_note }}</textarea>

                            </div>

                        </div>
                    </div>
                    <div class="uk-form-row">
                        <div class="uk-grid" data-uk-grid-margin>

                            <div class="uk-width-medium-1-3">
                                <label>Speacial Field</label>
                                <input type="text" name = "speacial" value="{{ $staff->staffinfo->fs_1 }}" class="md-input label-fixed" />
                                @if ($errors->has('speacial'))
                                    <span style="color:red">{{ $errors->first('speacial') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">

                                <label>Special Feild 2</label>
                                <input type="text" name ="fs_2" value="{{ $staff->staffinfo->fs_2 }}" class="md-input" />

                            </div>
                            <div class="uk-width-medium-1-3">

                                    <label>	Special Field 3</label>
                                    <input type="text" name ="fs_3" value="{{ $staff->staffinfo->fs_3 }}" class="md-input" />


                            </div>

                        </div>
                    </div>
                    <div class="uk-form-row">
                        <div class="uk-grid" data-uk-grid-margin>


                            <div class="uk-width-medium-1-2">
                                <label style="position:relative; top:-2px;">Joining Date</label>
                                <input type="date" name ="join_date" value="{{ $staff->staffinfo->join_date	 }}" class="md-input" />


                            </div>
                            <div class="uk-width-medium-1-2">
                                <label style="position:relative; top:-2px;">Ending Date</label>
                                <input type="date" name ="ending_date" value="{{ $staff->staffinfo->ending_date }}" class="md-input" />

                            </div>

                        </div>
                    </div>

                </div>

            </div>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-large-1-4 uk-width-medium-1-3">
                 <input type="hidden" value="{{ $staff->id }}" name="user_id">
                  {{ csrf_field() }}
                 <span class="uk-input-group-addon pull-left"><button type="submit" class="md-btn" >Update</button></span>



                </div>


            </div>


        </div>
    </div>
 </form>
@endsection

