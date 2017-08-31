@extends('layouts.backend.master')
@section('content')
    <form action="{{ route('dailyaccounts_update',$singleaccount->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="uk-grid" data-uk-grid-margin>

            <div class="uk-width-medium-1-1">
                <div class="md-card">
                    <div class="md-card-content">
                        <h3 class="heading_a uk-margin-small-bottom">
                          Edit  Daily Accounts | <a href="{{ route('dailyaccounts') }}"><i class="md-icon material-icons"></i></a>
                        </h3>


                        <div class="uk-width-medium-1-1">

                            <div class="uk-input-group">
                                <span class="uk-input-group-addon">Date:</span>
                                <label for="uk_dp_1">Select date</label>
                                <input class="md-input" type="text" name="newdate" value="{{ $singleaccount->date }}" data-uk-datepicker="{format:'YYYY-MM-DD'}">
                                @if($errors->has('newdate'))

                                    <span style="color:red">{!!$errors->first('newdate')!!}</span>

                                @endif
                            </div>

                        </div>
                        <br/>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-input-group">
                                <span class="uk-input-group-addon">Name:</span>
                                <select name="ledger" class="md-input" data-uk-tooltip="{pos:'top'}" title="Select ledger">
                                    <option value="" disabled selected hidden>Select...</option>
                                    @foreach($ledger as $item)
                                       @if($singleaccount->acc_type == $item->id )
                                        <option selected value="{{ $item->id }}">{{ $item->name }}</option>
                                       @else
                                      <option  value="{{ $item->id }}">{{ $item->name }}</option>
                                       @endif
                                    @endforeach
                                </select>
                                @if($errors->has('ledger'))

                                    <span style="color:red">{!!$errors->first('ledger')!!}</span>

                                @endif
                            </div>
                        </div>
                        <br/>
                        <div class="uk-width-medium-1-2" >
                            <div class="uk-input-group">
                                <span class="uk-input-group-addon"></span>
                                <span class="icheck-inline">
                                        <input type="radio" name="ix" value="1" @if($singleaccount->ix_status==1) checked  @endif id="radio_demo_inline_1" data-md-icheck />
                                        <label for="radio_demo_inline_1"  class="inline-label">&nbsp;Income</label>
                                    </span>
                                <span class="icheck-inline">
                                        <input type="radio" name="ix" value="0" @if($singleaccount->ix_status==0) checked  @endif  id="radio_demo_inline_2" data-md-icheck />
                                        <label for="radio_demo_inline_2"  class="inline-label">&nbsp;Expense</label>
                                    </span>
                            </div>
                        </div>


                        <br/>
                        <div class="uk-width-medium-1-1">

                            <div class="uk-input-group">
                                <span class="uk-input-group-addon">Contact:</span>
                                <label for="uk_dp_1">Select email/phone</label>
                                <input size="40" class="md-input" value="{{ $singleaccount->ContactName['phone'] }}" id="contact" type="text" name="contact">
                                @if($errors->has('user_id'))

                                    <span style="color:red">{!!$errors->first('user_id')!!}</span>

                                @endif
                                <span id="msg"><br/> not found</span>
                                <br/>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="md-card">
                    <div class="md-card-content">



                        <br/>
                        <div class="uk-width-medium-1-2">

                            <div class="uk-input-group">
                                <span class="uk-input-group-addon">Name:</span>

                                <input readonly class="md-input" type="text" value="{{ $singleaccount->ContactName['first_name'] }}" id="Student_name" style="border: none">
                            </div>
                            <div class="uk-input-group">
                                <span class="uk-input-group-addon">Email:</span>

                                <input readonly class="md-input" type="text" value="{{ $singleaccount->ContactName['email'] }}" style="border: none" id="student_email">
                            </div>
                            <div class="uk-input-group">
                                <span class="uk-input-group-addon">Phone:</span>

                                <input readonly class="md-input" type="text" value={{ $singleaccount->ContactName['phone'] }} style="border: none" id="student_phone">
                            </div>
                            <div class="uk-input-group">
                                <span class="uk-input-group-addon">Role:</span>

                                <input readonly class="md-input" type="text" style="border: none"  id="student_role">
                            </div>
                            <div class="uk-input-group">
                                <span class="uk-input-group-addon">Designation:</span>

                                <input readonly class="md-input" type="text" style="border: none"  id="student_designation">
                            </div>
                        </div>
                        <div class="md-card" style="box-shadow: none">
                            <div class="md-card-content">

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-2">
                                        <div class="uk-input-group">
                                            <span class="uk-input-group-addon">Class:</span>

                                            <input readonly class="md-input" type="text" style="border: none" size="20" id="student_class">
                                        </div>
                                    </div>
                                    <div class="uk-width-medium-1-2">
                                        <div class="uk-input-group">
                                            <span class="uk-input-group-addon">Section:</span>

                                            <input readonly class="md-input" type="text" size="20" style="border: none" id="student_section_min">
                                            <span id="student_section"></span>
                                        </div>
                                    </div>
                                    <div class="uk-width-medium-1-2">
                                        <div class="uk-input-group">
                                            <span class="uk-input-group-addon">Session:</span>

                                            <input readonly class="md-input" type="text" style="border: none" id="student_session">
                                        </div>
                                    </div>
                                    <div class="uk-width-medium-1-2">
                                        <div class="uk-input-group">
                                            <span class="uk-input-group-addon">Roll:</span>

                                            <input readonly class="md-input" type="text" style="border: none" id="student_roll">
                                            <input readonly class="md-input" type="hidden" style="border: none" name="user_id" id="user_id">
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="md-card" style="box-shadow: none">
                            <div class="md-card-content">

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-2">
                                        <div class="uk-form-row">
                                            <label>Amount</label>
                                            <input required type="text" name="amount" value="{{ $singleaccount->amount }}" class="md-input"  />
                                            @if($errors->has('amount'))

                                                <span style="color:red">{!!$errors->first('amount')!!}</span>

                                            @endif
                                            @php
                                                $ext = pathinfo(asset($singleaccount->f_url), PATHINFO_EXTENSION);
                                                $ext = strtolower($ext);
                                            @endphp
                                            <br/>
                                            <input name="ledgerfile" type="file">

                                            @if($ext=="jpeg" ||$ext=="png"|| $ext=="jpg"|| $ext=="gif")
                                                <a download target="_blank" href="{{ asset($singleaccount->f_url) }}" /> <img src="{{ asset($singleaccount->f_url) }}" height="100"  width="100" /> </a>
                                            @elseif($ext=='')
                                                No attachement
                                            @else
                                                <a download target="_blank" href="{{ asset($singleaccount->f_url) }}" /> Download Attachement </a>
                                            @endif


                                        </div>
                                    </div>
                                    <div class="uk-width-medium-1-2">

                                        <div class="uk-form-row">
                                            <label>Notes</label>
                                            <textarea name="note" cols="30" rows="4" class="md-input"> {{ $singleaccount->note }}</textarea>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="uk-input-group ">
                            <button type="submit" style="margin-left: 20px"  class="md-btn md-btn-success md-btn-wave-light waves-effect waves-button waves-light" >Update</button>
                        </div>
                        <br/>

                    </div>



                </div>
            </div>

        </div>
    </form>


    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script>



        $(document).ready(function(){

            $("#contact").on('keyup',function(){

                var student= $(this).val();
                var data='';
                $.ajax({
                    url: "{{ route('dailyaccounts_singleuser') }}",
                    type: "GET",
                    data: {student : student},
                    dataType: "json",
                    success: function (data, text) {

                        console.log(data);
                        if (data.jsonstatus){
                            $("#msg").text("Not Found").css({'color': 'red'});
                            $('#Student_name').val('');
                            $('#student_email').val('');
                            $('#student_phone').val('');
                            $('#student_role').val('');
                            $('#student_designation').val('');
                            $('#student_class').val('');
                            $('#student_session').val('');
                            $("#student_section_min").val('');
                            $('#student_roll').val('');
                            $('#user_id').val('');
                            $("#msg").text("");

                        }else
                        {
                            //  $('#Student_name').val(data);
                            $.each(data,function(index, value){
                                $('#Student_name').val(value.first_name);
                                $('#student_email').val(value.email);
                                $('#student_phone').val(value.phone);
                                $('#student_role').val(value.slug);
                                $('#student_designation').val(value.desination);
                                $('#student_class').val(value.classname);
                                $('#student_session').val(value.sessionname);
                                $("#student_section_min").val(value.sectionname);
                                $('#student_roll').val(value.student_roll);
                                $('#user_id').val(value.userid);
                                $("#msg").text("");






                            });
                        }


                    },
                    error: function (request, status, error) {
                        console.log(status);
                    }
                });
            });







            //end doc
        });

    </script>
@endsection
@section('custom_header_css')
    <style>
        .uk-input-group-addon{

            width: 110px;
        }

    </style>
@endsection
@section('title')
    Ledger - Daily account
@endsection