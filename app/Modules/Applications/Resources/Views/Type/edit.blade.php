@extends('layouts.backend.master')
@section('content')

    <form action="{{ route('application_type_update',$application_type->id) }}" method="post">
        {{ csrf_field() }}
        <div class="uk-grid" data-uk-grid-margin>

            <div class="uk-width-medium-1-2">
                <div class="md-card">
                    <div class="md-card-content">
                        <h3 class="heading_a uk-margin-small-bottom">
                           Application Type Edit
                        </h3>



                        <div class="uk-width-medium-1-3">
                            <label>Name</label>
                            <input type="text" value="{{ $application_type->name }}" name="title" class="input-count md-input" id="input_counter" maxlength="60" />

                            @if($errors->has('title'))

                                <span style="color:red">{!!$errors->first('title')!!}</span>

                            @endif
                        </div>

                  <br/>

                        <div class="uk-input-group ">
                            <button type="submit"  class="md-btn md-btn-success md-btn-wave-light waves-effect waves-button waves-light" >Update</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
            <div class="uk-width-medium-1-2">
                <div class="md-card">
                    <div class="md-card-content">


                         <div class="uk-width-medium-1-1">
                            <h3>Created By : {{ $application_type->CreatedBy->first_name }}</h3>
                            <h3>Updated By : {{ $application_type->UpdatedBy->first_name }}</h3>
                            <h3>Created At :{{ $application_type->created_at }}</h3>


                        </div>

                    </div>
                </div>
            </div>
        </div>

@endsection

@section('title')
    Application Type
@endsection