@extends('layouts.backend.master')

@section('title')
    Admin
@endsection
@section('content')
    <div id="page_content_inner">
        <form action="#" class="uk-form-stacked" id="user_form">
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-large-7-10">
                    <div class="md-card">
                        <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                            <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="assets/img/avatars/user.png" alt="user avatar"/>
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div class="user_avatar_controls">
                                        <span class="btn-file">
                                            <span class="fileinput-new"><i class="material-icons">&#xE2C6;</i></span>
                                            <span class="fileinput-exists"><i class="material-icons">&#xE86A;</i></span>
                                            <input type="file" name="user_edit_avatar_control" id="user_edit_avatar_control">
                                        </span>
                                    <a href="#" class="btn-file fileinput-exists" data-dismiss="fileinput"><i class="material-icons">&#xE5CD;</i></a>
                                </div>
                            </div>
                            <div class="user_heading_content">
                                <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">
                                        {{ $user->first_name }}</span>
                                  {{ Sentinel::getUser()->roles[0]->name }}

                                </h2>
                            </div>
                            <div class="md-fab-wrapper">
                                <div class="md-fab md-fab-toolbar md-fab-small md-fab-accent">
                                    <i class="material-icons">&#xE8BE;</i>
                                    <div class="md-fab-toolbar-actions">
                                        <button type="submit" id="user_edit_save" data-uk-tooltip="{cls:'uk-tooltip-small',pos:'bottom'}" title="Save"><i class="material-icons md-color-white">&#xE161;</i></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user_content">
                            <ul id="user_edit_tabs" class="uk-tab" data-uk-tab="{connect:'#user_edit_tabs_content'}">
                                <li class="uk-active"><a href="#">Basic</a></li>

                                <li><a href="#">Todo</a></li>
                            </ul>
                            <ul id="user_edit_tabs_content" class="uk-switcher uk-margin">
                                <li>
                                    <div class="uk-margin-top">
                                        <h3 class="full_width_in_card heading_c">
                                            General info
                                        </h3>
                                        <div class="uk-grid" data-uk-grid-margin>
                                            <div class="uk-width-medium-1-2">
                                                <label for="user_edit_uname_control">Name</label>
                                                <input class="md-input" type="text" id="user_name" value="{{ $user->first_name }}" name="user_name" />
                                            </div>
                                            <div class="uk-width-medium-1-2">
                                                <label for="user_edit_position_control">Old Password</label>
                                                <input class="md-input" type="password" min="6" id="old_user_password" name="old_user_password" />
                                            </div>
                                            <div class="uk-width-medium-1-2">
                                                <label for="user_edit_position_control">Change Password</label>
                                                <input class="md-input" type="password" min="6" id="new_user_password" name="new_user_password" />
                                            </div>
                                        </div>


                                        <h3 class="full_width_in_card heading_c">
                                            Contact info
                                        </h3>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-1">
                                                <div class="uk-grid uk-grid-width-1-1 uk-grid-width-large-1-2" data-uk-grid-margin>
                                                    <div>
                                                        <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon material-icons">&#xE158;</i>
                                                                </span>
                                                            <label>Email</label>
                                                            <input type="text" class="md-input" name="user_email" value="{{ $user->email }}" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                                <span class="uk-input-group-addon">
                                                                    <i class="md-list-addon-icon material-icons">&#xE0CD;</i>
                                                                </span>
                                                            <label>Phone Number</label>
                                                            <input type="text" class="md-input" name="user_phone" value="{{ $user->phone }} " />
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p class="uk-text-muted uk-text-small"></p>
                                    <div class="uk-grid" data-uk-grid-margin>

                                        <div class="uk-width-medium-1-2">
                                            <h4 class="heading_c uk-margin-small-bottom">All Groups</h4>
                                            <ul class="md-list md-list-addon uk-sortable groups_connected" id="all_groups">

                                            </ul>
                                        </div>
                                    </div>
                                    <input name="user_groups_control" id="user_groups_control" type="hidden"/>
                                </li>
                                <li>
                                    <ul class="md-list md-list-addon" id="user_todo">
                                        <li>
                                            <div class="md-list-addon-element">
                                                <input name="todo_item_0" type="checkbox" data-md-icheck/>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading">Ad hic quia ipsa.</span>
                                                <span class="uk-text-small uk-text-muted">Odio dicta nihil quae ut iure accusantium nemo enim est.</span>
                                            </div>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-large-3-10">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_c uk-margin-medium-bottom">Other settings</h3>
                            <div class="uk-form-row">
                                <input type="checkbox" checked data-switchery id="user_edit_active" />
                                <label for="user_edit_active" class="inline-label">User Active</label>
                            </div>
                            <hr class="md-hr">
                          <p>Last Login   {{ Sentinel::getUser()->last_login}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script>



        $(document).ready(function(){


            $("#user_form").on('submit',function(e) {

                e.preventDefault();
               var pass=$("#old_user_password").val();
                if( !$("#old_user_password").val() ){
                   return false;
                }

                var datastring = $("#user_form").serializeArray();
               console.log(datastring);
                $.ajax({
                    url: "{{ route('Profile_assign') }}",
                    type: "get",
                    data: datastring,
                    success: function (data, text) {

                        location.reload();

                    },
                    error: function (request, status, error) {
                        //$('#notfound').val("NOT FOUND");

                    console.log(error);
                    }
                });



            });









            //end doc
        });

        function cleanTable()
        {
            var c_result_body =document.querySelector("#result_body");
            c_result_body.empty();
            //console.log(c_result_body);

        }
        function higestnumber(){

            var numtable= document.querySelectorAll("#innersubject");
            var result_body= document.querySelectorAll("#result_body");
            var high= null;
            numtable.forEach(function(element)
            {
                var mark = 0;
                var high = null;
                var n = element.rows.length-1;
                for (var r =0;r<n; r++)
                {
                    var d=parseFloat(element.rows[r].cells[1].innerHTML);
                    if(d>mark || mark ==null)
                    {
                        high = r;
                        mark = d;
                    }

                }
                mark = null;
                element.rows[high].cells[1].style.color="green";
            });
            // inntertable end


            result_body.forEach(function(element)
            {
                var mark = 0;
                var high = null;

                var n = element.rows.length;

                for (var r =0;r<n; r++)
                {
                    var d=parseFloat(element.rows[r].cells[2].innerHTML);
                    if(d>mark || mark ==null)
                    {
                        high = r;
                        mark = d;
                    }

                }
                mark = null;
                element.rows[high].cells[2].style.color="green";
            });

        }
    </script>
@endsection


@section('custom_footer_js')



@endsection