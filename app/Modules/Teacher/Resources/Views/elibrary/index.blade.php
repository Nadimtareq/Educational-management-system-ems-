@extends('layouts.backend.master')

@section('title')
    Teacher Elibrary
@endsection
@section('content')
    <h4 class="heading_a uk-margin-bottom">Teacher Elibrary</h4>
    @include('layouts.backend.includes.teachermenu')
    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Created By</th>
                    <th>Created At</th>

                    <th>Action</th>
                </tr>
                </thead>



                <tbody>


                @foreach($library as $lib)
                <tr>
                    <td>{{ $lib->title }}</td>
                    <td>{{ $lib->Ofclass->name }}</td>
                    <td>{{ $lib->CreatedBy->first_name }}</td>
                    <td>{{ $lib->created_at }}</td>


                    <td>
                        <a  href="{{ route('teacher_Elibrary_edit',$lib->id) }}" class="uk-margin-left"><i class="material-icons">&#xE254;</i></a>
                        <a onclick="deleterow(this); return false" href="{{ route('teacher_Elibrary_delete',$lib->id) }}" class="uk-margin-left"><i class="material-icons md-24">&#xE872;</i></a></td>
                </tr>
                @endforeach
                <script>

                    function deleterow(link) {
                        UIkit.modal.confirm('Are you sure?', function(){
                            window.location.href = link;
                        });
                    }
                </script>
                </tbody>
            </table>
            <div class="md-fab-wrapper">
                <a class="md-fab md-fab-accent" href="{{ route('teacher_Elibrary_create') }}" id="recordAdd">
                    <i class="material-icons"></i>
                </a>
            </div>
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
    <script src="bower_components/parsleyjs/dist/parsley.min.js"></script>
    <script src="{{ asset('assets/js/pages/components_notifications.min.js') }} "></script>
    <script src="{{ asset('assets/js/kendoui_custom.min.js') }}"></script>

    <!--  kendoui functions -->
    <script src="{{ asset('assets/js/pages/kendoui.min.js') }}"></script>

@endsection


@section('custom_header_top_css')
    <link rel="stylesheet" href="{{ asset('bower_components/kendo-ui/styles/kendo.common-material.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('bower_components/kendo-ui/styles/kendo.material.min.css') }}" id="kendoCSS"/>
@endsection