@extends('layouts.backend.master')

@section('title')
    My Class Students
@endsection
@section('content')
    <h4 class="heading_a uk-margin-bottom">Class Students</h4>
    @include('layouts.backend.includes.teachermenu')
    <form action="{{ route('teacher_student_result_filter') }}" method="post" >
        {{ csrf_field() }}
    <div class="md-card">
        <div class="md-card-content">
            <h3 class="heading_a">Search </h3>
            <div class="uk-grid" data-uk-grid-margin>

                <div class="uk-width-medium-1-3">
                    <select name="exam_id" class="md-input" data-uk-tooltip="{pos:'top'}" title="Select with exam code">
                        @foreach($exam as $item)
                            <option value="{{ $item->id }}">{{ $item->name."-".$item->classe->name."-".$item->term->title }} </option>
                        @endforeach
                    </select>
                    <span class="uk-form-help-block">With Exams </span>
                </div>
                <div class="uk-width-medium-1-3">

                    <select name="subject_id" class="md-input" data-uk-tooltip="{pos:'top'}" title="Select with subject">
                        @foreach($subject as $item)
                            <option value="{{ $item->id }}">{{ $item->title }} </option>


                        @endforeach
                    </select>
                    <span class="uk-form-help-block">With Subjects</span>
                </div>


                <div class="uk-width-medium-1-3">
                    <p>

                        <span class="uk-badge uk-badge-success">{{ $session }}</span>
                        <span class="uk-badge uk-badge-warning">{{ $myclass }}</span>
                        <span class="uk-badge uk-badge-danger">{{ $section }} </span>
                    </p>
                </div>
                <div class="uk-width-medium-1-3">


                    <button class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light pull-left">Filter</button>


                </div>
            </div>
        </div>
    </div>
    </form>
    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Session</th>
                    <th>Exam</th>
                    <th>term </th>



                </tr>
                </thead>
               @foreach($exam as $item)
                <tr>

                    <td>{{ $item->classe->name }}</td>
                    <td>{{ $item->section->name }}</td>
                    <td>{{ $item->session->title }}</td>
                    <td ><a id="filter" data-uk-modal="{target:'#modal_full'}" href="{{ route('teacher_student_result_exam',$item->id) }}"> {{ $item->name }} </a></td>

                    <td>{{ $item->term->title }}</td>


                </tr>
              @endforeach
                <tbody>


                </tbody>
            </table>

        </div>
    </div>

    <div class="uk-modal uk-modal-card-fullscreen" id="modal_full">
        <div class="uk-modal-dialog uk-modal-dialog-blank">
            <div class="md-card uk-height-viewport">
                <div class="md-card-toolbar">
                    <div class="md-card-toolbar-actions">
                        <div class="md-card-dropdown" data-uk-dropdown="{pos:'bottom-right'}">
                            <i class="md-icon material-icons">&#xE5D4;</i>
                            <div class="uk-dropdown">
                                <ul class="uk-nav">

                                </ul>
                            </div>
                        </div>
                    </div>
                    <span onclick="cleanTable()" class="md-icon material-icons uk-modal-close">&#xE5C4;</span>
                    <h3  class="md-card-toolbar-heading-text">
                       Back
                    </h3>
                </div>
                <div class="md-card-content">
                    <h4 id="exam_name" class="heading_a uk-margin-bottom">No Exam </h4>
                    <div class="md-card uk-margin-medium-bottom">
                        <div class="md-card-content">
                            <div class="uk-overflow-container">
                                <table id="result_table_of" class="uk-table uk-text-nowrap">
                                    <thead>
                                    <tr >
                                        <th style="text-align: center">Roll</th>
                                        <th style="text-align: center">Subject</th>
                                        <th style="text-align: center">Total</th>


                                    </tr>
                                    </thead>

                                    <tbody id="result_body">


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script>



        $(document).ready(function(){


            $("a#filter").on('click',function(e) {

                e.preventDefault();
                var currentAnchor = $(this);

                var termresult = null;
                document.getElementById("result_body").innerHTML = 'no data';
                    $.ajax({
                        url: currentAnchor.attr('href'),
                        type: "GET",
                        contentType: "application/json; charset=utf-8",
                        dataType: "html",
                        success: function (data, text) {

                       termresult = data;
                      document.getElementById("exam_name").innerHTML = currentAnchor.text();
                      document.getElementById("result_body").innerHTML = "Data Loading";
                      document.getElementById("result_body").innerHTML = termresult;
                            setTimeout(higestnumber,1000);
                        },
                        error: function (request, status, error) {
                            //$('#notfound').val("NOT FOUND");

                            document.getElementById("result_body").innerHTML = "No data found";
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

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent" href="{{ route('teacher_student_result_create') }}">
            <i class="material-icons"></i>
        </a>
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