@extends('layouts.backend.master')

@section('title')
    SuperAdmin Staff
@endsection
@section('content')
    <h4 class="heading_a uk-margin-bottom">Staff Users</h4>
    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <table id="dt_default" class="uk-table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Designation</th>
                    <th>Field Speciality 1</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Designation</th>
                    <th>Field Speciality 1</th>
                    <th>Action</th>
                </tr>
                </tfoot>

                <tbody>



                 @foreach($staff as $item)

                    <tr>
                        <td> {{ $item->first_name }}</td>
                        <td>{{ $item->c_1 }}</td>

                        <td> {{ $item->desination }}</td>
                        <td> {{ $item->fs_1 }}</td>



                        <td>
                            <a  href="{{ route('user_staff_edit',$item->id) }}" class="uk-margin-left"><i class="material-icons">&#xE254;</i></a>


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