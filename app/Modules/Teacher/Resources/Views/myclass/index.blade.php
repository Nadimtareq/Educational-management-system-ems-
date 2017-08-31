@extends('layouts.backend.master')

@section('title')
    My Class Students
@endsection
@section('content')
    <h4 class="heading_a uk-margin-bottom">Class Students</h4>
    @include('layouts.backend.includes.teachermenu')
    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Roll</th>
                    <th>Student Name</th>
                    <th>Student Contact</th>
                    <th>Gurdian Name</th>
                    <th>Gurdian Contact</th>

                </tr>
                </thead>



                <tbody>
                @foreach($student as $item)
                    <tr>
                        <td>{{ $item->student_roll }}</td>
                        <td>{{ $item->user->first_name }}</td>
                        <td>{{ $item->user->phone }}</td>
                        <td> {{ $item->studentinfo->gur_name }}</td>
                        <td> {{ $item->studentinfo->gur_c1 }}</td>

                    </tr>
                @endforeach

                </tbody>
            </table>

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