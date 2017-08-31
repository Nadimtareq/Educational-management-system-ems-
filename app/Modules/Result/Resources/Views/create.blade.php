@extends('layouts.backend.master')

@section('title')
    Result
@endsection

@section('content')

    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <form action="{{ route('result_store') }}" method="post" class="uk-form-stacked" id="user_edit_form">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-10-10">
                        <div class="md-card">
                            <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                                {{ csrf_field() }}
                                <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                </div>
                                <div class="user_heading_content">
                                    <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Result </span></h2>
                                </div>
                            </div>
                            <div class="user_content">


                                <div class="md-card-content large-padding">

                                    <div class="uk-grid" data-uk-grid-margin>

                                        <div class="uk-width-medium-9-10">
                                            <table class="uk-table">
                                                <thead>
                                                <tr>
                                                    <th class="uk-width-4-10">Roll</th>
                                                    <th class="uk-width-3-12">Name</th>
                                                    <th class="uk-width-2-12 uk-text-right">Obtainmarks</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <input type="hidden" name="subject_id" value="{{$subject_id}}" style="width:50%;">
                                                <input type="hidden" name="exam_id" value="{{$exam_id}}" style="width:50%;">
                                                @foreach($batch as $batchdata)
                                                    <?php $j = 0; ?>
                                                    @foreach($result as $resultData)

                                                    @if($resultData->users_id == $batchdata->user_id)

                                                    <tr>
                                                        <td>{{$batchdata->student_roll}}</td>

                                                        <td><i class="name">{{$batchdata->user->first_name}} {{$batchdata->user->last_name}}</i></td>
                                                        <td class="uk-text-right">

                                                            <input type="text" name="mark[]" value="{{$resultData->mark}}" style="width:50%;">

                                                            @if($errors->has('mark[]'))

                                                                <span style="color:red">subject is Required</span>

                                                            @endif
                                                            <input type="hidden" name="user_id[]" value="{{$batchdata->user->id}}" style="width:50%;">
                                                        </td>
                                                    </tr>
                                                    <?php $j = 1;?>
                                                    @endif
                                                    @endforeach
                                                    @if($j == 0)
                                                        <tr>
                                                            <td>{{$batchdata->student_roll}}</td>

                                                            <td><i class="name">{{$batchdata->user->first_name}} {{$batchdata->user->last_name}}</i></td>
                                                            <td class="uk-text-right">

                                                                <input type="text" name="mark[]" value="" style="width:50%;">
                                                                @if($errors->has('mark[]'))
                                                                    <span style="color:red">subject is Required</span>
                                                                @endif
                                                                <input type="hidden" name="user_id[]" value="{{$batchdata->user->id}}" style="width:50%;">
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                <div class="uk-grid">
                                    <div class="uk-width-1-1 uk-float-right">
                                        <button type="submit" class="md-btn md-btn-primary" >Submit</button>
                                        <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>

@endsection
@section('custom_footer_js')
    <script type="text/javascript">

        $('#exam').on('change',function(){
            var exam = $('#exam option:selected').val();
            if(exam == '')
            {
                var address = "result/0";
            }
            else
            {
                var address = exam;
            }
            window.location=address;
        });

    </script>

@endsection