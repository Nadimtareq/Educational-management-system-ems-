@extends('layouts.backend.master')

@section('title')
    Pending Users
@endsection
@section('content')
    <h4 class="heading_a uk-margin-bottom">Pending Users</h4>
    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <table id="dt_default" class="uk-table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>email</th>
                    <th>activated</th>
                    <th>Created At</th>

                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>email</th>
                    <th>activated</th>
                    <th>Created At</th>

                    <th>Action</th>
                </tr>
                </tfoot>

                <tbody>
              @php
                  $rolename ='';
              @endphp

                @foreach($user as $item)
                    <tr>
                        <td>{{ $item->first_name }}</td>
                        <td>{{ $item->email }}</td>

                        <td>@if($item->activation['completed']==0)
                                {{ 'No' }}
                            @else
                              {{ 'Yes' }}
                            @endif
                        </td>
                        <td>{{ $item->created_at }}</td>


                        <td>
                            @php
                                foreach ($item->roles as $value){
                                $rolename= trim($value->slug);
                             }

                            @endphp
                            <form action="{{ route('Role_update') }}" method="POST">
                             {{ csrf_field() }}
                             <input type="hidden" name="old_role" value=" {{ $rolename }} " />
                             <input type="hidden" name="user_id" value="{{ $item->id }}">
                            <div class="uk-width-medium-1-1">
                                <select name="role" id="select_demo_2" class="md-input" data-uk-tooltip="{pos:'top'}" title="Select with tooltip" onchange="this.form.submit()">
                                    <option value="" disabled selected hidden>Select...</option>
                                    @foreach($role as $value)
                                        @if( $rolename===$value->slug)
                                        <option selected value="{{ $value->slug }}">{{ $value->name }}</option>
                                        @else
                                            <option value="{{ $value->slug }}">{{ $value->name }}</option>
                                        @endif

                                    @endforeach
                                </select>

                            </div>
                            </form>
                            @php
                                $rolename ='';
                            @endphp
                            <a onclick="deleterow(this); return false" href="{{ route('Profile_delete',$item->id) }}" class="uk-margin-left"><i class="material-icons md-24">&#xE872;</i></a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <script>

                function deleterow(link) {
                    UIkit.modal.confirm('Are you sure?', function(){
                        window.location.href = link;
                    });
                }
            </script>
        </div>
    </div>

@endsection


@section('custom_footer_js')
    <!-- page specific plugins -->
    <!-- datatables -->
    <script src="{{ asset('bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <!-- datatables buttons-->
    <script src="{{ asset('bower_components/datatables-buttons/js/dataTables.buttons.js') }}"></script>
    <script src="{{ asset('assets/js/custom/datatables/buttons.uikit.js') }}"></script>


    <!-- datatables custom integration -->
    <script src="{{ asset('assets/js/custom/datatables/datatables.uikit.min.js') }}"></script>

    <!--  datatables functions -->
    <script src="{{ asset('assets/js/pages/plugins_datatables.min.js') }}"></script>

@endsection