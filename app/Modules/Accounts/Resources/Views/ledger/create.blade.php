@extends('layouts.backend.master')
@section('content')
    <form action="{{ route('AccountType_store') }}" method="post">
        {{ csrf_field() }}
        <div class="uk-grid" data-uk-grid-margin>

            <div class="uk-width-medium-1-1">
                <div class="md-card">
                    <div class="md-card-content">
                        <h3 class="heading_a uk-margin-small-bottom">
                     New Ledger | <a href="{{ route('AccountType') }}"><i class="material-icons">&#xE8BA;</i></a>
                        </h3>



                            <div class="uk-width-medium-1-3">
                                <label>Name</label>
                                <input type="text" name="name" class="input-count md-input" id="input_counter" maxlength="60" />

                            @if($errors->has('name'))

                                <span style="color:red">{!!$errors->first('name')!!}</span>

                            @endif
                            </div>



                        <br/>

                        <div class="uk-input-group ">
                            <button type="submit"  class="md-btn md-btn-success md-btn-wave-light waves-effect waves-button waves-light" >Save</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
@endsection

@section('title')
    Ledger
@endsection