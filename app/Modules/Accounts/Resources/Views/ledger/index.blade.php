@extends('layouts.backend.master')

@section('title')
    Account Type
@endsection
@section('content')

    <div id="page_heading" data-uk-sticky="{ top: 48, media: 960 }">
        <h1> Account Type</h1>

    </div>
    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                </thead>



                <tbody>


                @foreach($acc_type as $type)
                <tr>
                    <td width="75%">{{ $type->name }}</td>
                   <td width="25%" align="right">
                        <a  href="{{ route('AccountType_edit',$type->id) }}" class="uk-margin-left"><i class="material-icons">&#xE254;</i></a>
                        <a onclick="deleterow(this); return false" href="{{ route('AccountType_delete',$type->id) }}" class="uk-margin-left"><i class="material-icons md-24">&#xE872;</i></a></td>
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
                <a class="md-fab md-fab-accent" href="{{ route('AccountType_create') }}" id="recordAdd">
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