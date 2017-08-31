@extends('layouts.backend.master')
@section('content')

    <form action="{{ route('AccountType_update',$account_type->id) }}" method="post">
        {{ csrf_field() }}
        <div class="uk-grid" data-uk-grid-margin>

            <div class="uk-width-medium-1-2">
                <div class="md-card">
                    <div class="md-card-content">
                        <h3 class="heading_a uk-margin-small-bottom">
                          Ledger Edit | <a href="{{ route('AccountType') }}"><i class="material-icons">&#xE8BA;</i></a>

                        </h3>

                        <hr/>  <br/>

                        <div class="uk-width-medium-1-3">
                            <label>Name</label>
                            <input type="text" value="{{ $account_type->name }}" name="name" class="input-count md-input" id="input_counter" maxlength="60" />

                            @if($errors->has('name'))

                                <span style="color:red">{!!$errors->first('name')!!}</span>

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
                            <h3>Created By : {{ $account_type->CreatedBy->first_name }}</h3>
                            <h3>Updated By : {{ $account_type->UpdatedBy->first_name }}</h3>
                            <h3>Created At :{{ $account_type->created_at }}</h3>


                        </div>

                    </div>
                </div>
            </div>
        </div>

@endsection

@section('title')
    Ledger Edit
@endsection