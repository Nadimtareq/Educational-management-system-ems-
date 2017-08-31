@extends('layouts.backend.master')

@section('title')
   Student Edit
@endsection
@section('content')
    <h4 class="heading_a uk-margin-bottom">Student Profile Edit</h4>
<form action="{{ route('user_student_update') }}" method="post">
    <div class="md-card">
        <div class="md-card-content">
            <h3 class="heading_a">Student Profile</h3>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-1">
                    <div class="uk-form-row">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-3">
                                <label>Name</label>
                                <input type="text" name ="name" value="{{ isset($student->first_name) ? $student->first_name : '' }}" class="md-input" />
                                @if ($errors->has('name'))
                                    <span style="color:red">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Email</label>
                                <input type="text" name = "email" value="{{ isset($student->email) ? $student->first_name : '' }}" class="md-input label-fixed" />
                                @if ($errors->has('email'))
                                    <span style="color:red">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Phone</label>
                                <input type="text" name ="contact" value="{{ isset($student->phone) ? $student->phone : '' }}" class="md-input label-fixed" />
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
                                <input type="text" name ="religion" value=" {{ isset($student->Studentinfo->religion) ? $student->Studentinfo->religion : '' }}" class="md-input" />
                                @if ($errors->has('religion'))
                                    <span style="color:red">{{ $errors->first('religion') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Nationality</label>
                                <input type="text" name = "nationality" value="{{ isset($student->Studentinfo->nationality) ? $student->Studentinfo->nationality : ''}}" class="md-input label-fixed" />
                                @if ($errors->has('nationality'))
                                    <span style="color:red">{{ $errors->first('nationality') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Student varification Id</label>
                                <input type="text" name = "v_id" value="{{ isset($student->Studentinfo->v_id) ? $student->Studentinfo->v_id : '' }}" class="md-input label-fixed" />
                                @if ($errors->has('v_id'))
                                    <span style="color:red">{{ $errors->first('v_id') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="uk-form-row">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-3">
                                <label style="position: relative; top:-2px; ">Birth Date</label>

                                <input type="date" name ="birth_date" value="{{ isset($student->Studentinfo->birth_date) ? $student->Studentinfo->birth_date :''}}" class="md-input" />
                                @if ($errors->has('birth_date'))
                                    <span style="color:red">{{ $errors->first('birth_date') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Contact 2</label>
                                <input type="text" name="c_2" value="{{ isset($student->Studentinfo->c_2) ? $student->Studentinfo->c_2: '' }}" class="md-input label-fixed" />
                                @if ($errors->has('c_2'))
                                    <span style="color:red">{{ $errors->first('c_2') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Gurdian Varification Id</label>
                                <input type="text" name = "gur_vid" value="{{ isset($student->Studentinfo->gur_vid) ? $student->Studentinfo->gur_vid: '' }}" class="md-input label-fixed" />
                                @if ($errors->has('gur_vid'))
                                    <span style="color:red">{{ $errors->first('gur_vid') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="uk-form-row">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-3">
                                <label style="position: relative; top:-2px; ">About</label>

                                <textarea cols="30" name="about" rows="4" class="md-input selecize_init" >{{ isset($student->Studentinfo->about) ?$student->Studentinfo->about : '' }}</textarea>
                                    @if ($errors->has('about'))
                                    <span style="color:red">{{ $errors->first('about') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Permanent Address</label>
                                <textarea cols="30" name="per_add" rows="5" class="md-input selecize_init" >{{ isset($student->Studentinfo->per_add) ? $student->Studentinfo->per_add : '' }}</textarea>

                            @if ($errors->has('per_add'))
                                    <span style="color:red">{{ $errors->first('per_add') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Present Address</label>
                                <textarea cols="30" name="pre_add" rows="5" class="md-input selecize_init" >{{ isset($student->Studentinfo->pre_add) ? $student->Studentinfo->pre_add : '' }}</textarea>

                                @if ($errors->has('pre_add'))
                                    <span style="color:red">{{ $errors->first('pre_add') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="uk-form-row">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-3">
                                <label>Gurdian NAme</label>
                                <input type="text" name ="gur_name" value="{{ isset($student->Studentinfo->gur_name) ? $student->Studentinfo->gur_name : '' }}" class="md-input" />
                                @if ($errors->has('gur_name'))
                                    <span style="color:red">{{ $errors->first('gur_name') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Gurdian Number</label>
                                <input type="text" name = "gur_c1" value="{{ isset($student->Studentinfo->gur_c1)  ? $student->Studentinfo->gur_c1 : '' }}" class="md-input label-fixed" />
                                @if ($errors->has('gur_c1'))
                                    <span style="color:red">{{ $errors->first('gur_c1') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Gurdian Number 2</label>
                                <input type="text" name = "gur_c2" value="{{ isset($student->Studentinfo->gur_c2)  ? $student->Studentinfo->gur_c2 : '' }}" class="md-input label-fixed" />
                                @if ($errors->has('gur_c2'))
                                    <span style="color:red">{{ $errors->first('gur_c2') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-large-1-4 uk-width-medium-1-3">
                 <input type="hidden" value="{{ isset($student->id) ? $student->id : 0 }}" name="user_id">
                  {{ csrf_field() }}
                 <span class="uk-input-group-addon pull-left"><button type="submit" class="md-btn" >Update</button></span>


                </div>


            </div>


        </div>
    </div>
 </form>
@endsection

