@extends('layouts.backend.master')

@section('title')
    Teachers Edit
@endsection
@section('content')
    <h4 class="heading_a uk-margin-bottom">Teachers Profile Edit</h4>
<form action="{{ route('user_teacher_update') }}" method="post">
    <div class="md-card">
        <div class="md-card-content">
            <h3 class="heading_a">Input fields</h3>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-1">
                    <div class="uk-form-row">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-3">
                                <label>Name</label>
                                <input type="text" name ="name" value="{{ $teacher->first_name }}" class="md-input" />
                                @if ($errors->has('name'))
                                    <span style="color:red">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Email</label>
                                <input type="email" name = "email" value="{{ $teacher->email }}" class="md-input label-fixed" />
                                @if ($errors->has('email'))
                                    <span style="color:red">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Phone</label>
                                <input type="text" name = "contact" value="{{ $teacher->teacherinfo->c_1 }}" class="md-input label-fixed" />
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
                                <input type="text" name ="religion" value="{{ $teacher->teacherinfo->religion }}" class="md-input" />
                                @if ($errors->has('religion'))
                                    <span style="color:red">{{ $errors->first('religion') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Designation</label>
                                <input type="text" name ="designation" value="{{ $teacher->teacherinfo->desination }}" class="md-input label-fixed" />
                                @if ($errors->has('designation'))
                                    <span style="color:red">{{ $errors->first('designation') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Education level</label>
                                <input type="text" name ="eud_level" value="{{ $teacher->teacherinfo->eud_level	 }}" class="md-input" />




                            </div>

                        </div>
                    </div>

                    <div class="uk-form-row">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-3">
                                <div class="uk-form-row">
                                    <label>About</label>
                                    <textarea cols="30" name="about" rows="4" class="md-input">{{ $teacher->teacherinfo->about }}</textarea>
                                </div>

                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Permanent Address</label>
                                <textarea cols="30" name="per_add" rows="4" class="md-input">{{ $teacher->teacherinfo->per_add }}</textarea>

                            </div>

                            <div class="uk-width-medium-1-3">
                                <label>Present Address</label>
                                <textarea cols="30" name="pre_add" rows="4" class="md-input">{{ $teacher->teacherinfo->pre_add }}</textarea>

                            </div>
                        </div>
                    </div>
                    <div class="uk-form-row">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-3">
                                <div class="uk-form-row">
                                    <label>Varification Id</label>
                                    <input type="text" name="v_id" value="{{ $teacher->teacherinfo->v_id }}" class="md-input label-fixed" />
                                </div>

                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Nationality</label>
                                <input type="text" name = "nationality" value="{{ $teacher->teacherinfo->nationality }}" class="md-input label-fixed" />

                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Birth Date</label>
                                <input type="date" name = "birth_date" value="{{ $teacher->teacherinfo->birth_date }}" class="md-input label-fixed" />

                            </div>

                        </div>
                    </div>
                    <div class="uk-form-row">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-3">
                                <div class="uk-form-row">
                                    <label>Contact 2 </label>
                                    <textarea cols="30" name="c_2" rows="4" class="md-input">{{ $teacher->teacherinfo->c_2 }}</textarea>
                                </div>

                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Salary Info</label>
                                <textarea cols="30" name="salary_info" rows="4" class="md-input">{{ $teacher->teacherinfo->salary_info }}</textarea>


                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Salary Note</label>
                                <textarea cols="30" name="salary_note" rows="4" class="md-input">{{ $teacher->teacherinfo->salary_note }}</textarea>

                            </div>

                        </div>
                    </div>
                    <div class="uk-form-row">
                        <div class="uk-grid" data-uk-grid-margin>

                            <div class="uk-width-medium-1-3">
                                <label>Speacial Field 1</label>
                                <input type="text" name = "speacial" value="{{ $teacher->teacherinfo->fs_1 }}" class="md-input label-fixed" />
                                @if ($errors->has('speacial'))
                                    <span style="color:red">{{ $errors->first('speacial') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">

                                <label>Special Field 2</label>
                                <input type="text" name ="fs_2" value="{{ $teacher->teacherinfo->fs_2 }}" class="md-input" />

                            </div>
                            <div class="uk-width-medium-1-3">

                                <label>	Special Field 3</label>
                                <input type="text" name ="fs_3" value="{{ $teacher->teacherinfo->fs_3 }}" class="md-input" />


                            </div>

                        </div>
                    </div>
                    <div class="uk-form-row">
                        <div class="uk-grid" data-uk-grid-margin>


                            <div class="uk-width-medium-1-3">
                                <label style="position:relative; top:-2px;">Joining Date</label>
                                <input type="date" name ="join_date" value="{{ $teacher->teacherinfo->join_date	 }}" class="md-input" />


                            </div>
                            <div class="uk-width-medium-1-3">
                                <label style="position:relative; top:-2px;">Ending Date</label>
                                <input type="date" name ="ending_date" value="{{ $teacher->teacherinfo->ending_date }}" class="md-input" />

                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-large-1-4 uk-width-medium-1-3">
                    <input type="hidden" value="{{ $teacher->id }}" name="user_id">
                    {{ csrf_field() }}
                    <span class="uk-input-group-addon pull-left"><button type="submit" class="md-btn" >Update</button></span>
                   @if($teacher->teacherinfo->CreatedBy)
                    <h5 align="right">Created By {{ $teacher->teacherinfo->CreatedBy }}</h5>
                   @endif

                </div>


            </div>


        </div>
    </div>
 </form>
@endsection

