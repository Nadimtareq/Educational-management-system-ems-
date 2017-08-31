@extends('layouts.backend.master')

@section('title')
    Notice
@endsection
@section('content')
    <h4 class="heading_a uk-margin-bottom">Notice</h4>
    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Desc</th>

                    <th>Type</th>
                    <th>Create At</th>
                    <th>Updated At</th>

                    <th>Action</th>
                </tr>
                </thead>



                <tbody>


                @foreach($notice as $notices)
                <tr>
                    <td>{{ $notices->title }}</td>
                    <td>{{ $notices->details }}</td>
                    <td>{{ $notices->NoticeType->title }}</td>
                    <td>{{ $notices->created_at }}</td>
                    <td>{{ $notices->updated_at }}</td>


                    <td>
                        <a  href="{{ route('notice_show',$notices->id) }}" class="uk-margin-left"><i class="material-icons">&#xE89E;</i></a>

                        <a  href="{{ route('notice_edit',$notices->id) }}" class="uk-margin-left"><i class="material-icons">&#xE254;</i></a>
                        <a onclick="deleterow(this); return false" href="{{ route('notice_delete',$notices->id) }}" class="uk-margin-left"><i class="material-icons md-24">&#xE872;</i></a></td>
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
                <a class="md-fab md-fab-accent" href="{{ route('notice_create') }}" id="recordAdd">
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