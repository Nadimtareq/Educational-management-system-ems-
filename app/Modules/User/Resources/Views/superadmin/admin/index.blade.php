@extends('layouts.backend.master')

@section('title')
    SuperAdmin Admin
@endsection
@section('content')
    <h4 class="heading_a uk-margin-bottom">Admin Users</h4>
    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <table id="dt_default" class="uk-table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>email</th>
                    <th>Phone</th>


                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                </tfoot>

                <tbody>



                 @foreach($admin as $item)

                    <tr>
                        <td> {{ $item->first_name }}</td>
                        <td>{{ $item->email }}</td>

                        <td> {{ $item->phone }}</td>



                        <td>
                            <a  href="{{ route('user_superAdmin_edit',$item->id) }}" class="uk-margin-left"><i class="material-icons">&#xE254;</i></a>


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
    <script src="{{ asset('bower_components/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('bower_components/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('bower_components/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('bower_components/datatables-buttons/js/buttons.colVis.js') }}"></script>
    <script src="{{ asset('bower_components/datatables-buttons/js/buttons.html5.js') }}"></script>
    <script src="{{ asset('bower_components/datatables-buttons/js/buttons.print.js') }}"></script>

    <!-- datatables custom integration -->
    <script src="{{ asset('assets/js/custom/datatables/datatables.uikit.min.js') }}"></script>

    <!--  datatables functions -->
    <script src="{{ asset('assets/js/pages/plugins_datatables.min.js') }}"></script>

@endsection