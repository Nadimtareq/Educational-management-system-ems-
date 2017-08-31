@extends('layouts.backend.master')

@section('title')
    Application Type
@endsection
@section('content')

    <div id="page_heading" data-uk-sticky="{ top: 48, media: 960 }">
        <h1> Application Type</h1>

    </div>
    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Type</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Session</th>
                    <th>Roll</th>
                    <th>Action</th>
                </tr>
                </thead>



                <tbody>


                @foreach($certificate as $item)
                    <tr>
                        <td >{{ $item->ctype->name }}</td>
                        <td >{{ $item->appclass->name }}</td>
                        <td >{{ $item->appsection->name }}</td>
                        <td >{{ $item->appsession->title }}</td>
                        <td >{{ $item->student_roll }}</td>
                        <td  align="right">
                            <a  href="{{ route('application_edit',$item->id) }}" class="uk-margin-left"><i class="material-icons">&#xE254;</i></a>
                            <a onclick="deleterow(this); return false" href="{{ route('application_delete',$item->id) }}" class="uk-margin-left"><i class="material-icons md-24">&#xE872;</i></a></td>
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
                <a class="md-fab md-fab-accent" href="{{ route('application_create') }}" id="recordAdd">
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

@endsection