@extends('layouts.backend.master')

@section('title')
    Admin Users Edit
@endsection
@section('content')
    <h4 class="heading_a uk-margin-bottom">Admin Users Edit</h4>
<form action="{{ route('user_superAdmin_update') }}" method="post">
    <div class="md-card">
        <div class="md-card-content">
            <h3 class="heading_a">Input fields</h3>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-1">
                    <div class="uk-form-row">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-3">
                                <label>Name</label>
                                <input type="text" name ="name" value="{{ $admin->first_name }}" class="md-input" />
                                @if ($errors->has('name'))
                                    <span style="color:red">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Email</label>
                                <input type="email" name = "email" value="{{ $admin->email }}" class="md-input label-fixed" />
                                @if ($errors->has('email'))
                                    <span style="color:red">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="uk-width-medium-1-3">
                                <label>Phone</label>
                                <input type="text" name = "phone" value="{{ $admin->Admindinfo->phone }}" class="md-input label-fixed" />
                                @if ($errors->has('phone'))
                                    <span style="color:red">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-large-1-4 uk-width-medium-1-3">
                 <input type="hidden" value="{{ $admin->id }}" name="user_id">
                  {{ csrf_field() }}
                 <span class="uk-input-group-addon pull-left"><button type="submit" class="md-btn" >Update</button></span>


                </div>


            </div>


        </div>
    </div>
 </form>
@endsection

