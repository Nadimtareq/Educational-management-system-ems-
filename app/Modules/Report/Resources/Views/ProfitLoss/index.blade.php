@extends('layouts.backend.master')

@section('title')
    Profit And Loss
@endsection
@section('content')


    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-toolbar">
            <div class="md-card-toolbar-actions hidden-print">
                <i class="md-icon material-icons" id="invoice_print"></i>



                <!--end  -->
                <div class="md-card-dropdown" data-uk-dropdown="{pos:'bottom-right'}" aria-haspopup="true" aria-expanded="false"> <a href="#" data-uk-modal="{target:'#coustom_setting_modal'}"><i class="material-icons"></i><span>Custom Setting</span></a>

                </div>
                <!--coustorm setting modal start -->
                <div class="uk-modal" id="coustom_setting_modal">
                    <div class="uk-modal-dialog">
                        <form method="POST" action="{{ route('ProfitLoss_search') }}" accept-charset="UTF-8" class="user_edit_form" id="user_profile">

                            <div class="uk-modal-header">
                                <h3 class="uk-modal-title">Select Date Range <i class="material-icons" data-uk-tooltip="{pos:'top'}" title="headline tooltip"></i></h3>
                            </div>

                            <div class="uk-width-large-2-2 uk-width-2-2">
                                <div class="uk-width-large-2-2 uk-width-2-2">
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                        <div class="md-input-wrapper"><label for="uk_dp_1">From</label><input class="md-input" type="text" id="uk_dp_start" name="from_date" data-uk-datepicker="{format:'YYYY-MM-DD'}"><span class="md-input-bar "></span></div>

                                    </div>
                                </div>
                                <div class="uk-width-large-2-2 uk-width-2-2">
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                        <div class="md-input-wrapper"><label for="uk_dp_1">To</label><input class="md-input" type="text" id="uk_dp_1" name="to_date" data-uk-datepicker="{format:'YYYY-MM-DD'}"><span class="md-input-bar "></span></div>

                                    </div>
                                </div>
                                {{ csrf_field() }}

                            </div>
                            <div class="uk-modal-footer uk-text-right">
                                <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                                <button type="submit" name="submit" class="md-btn md-btn-flat md-btn-flat-primary">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--end  -->
            </div>

            <h3 class="md-card-toolbar-heading-text large" id="invoice_name"></h3>
        </div>
        <div style="padding: 16px 24px;" >


            <div class="uk-width-small-5-5 uk-text-center uk-row-first">
                <img style="margin-bottom: -20px;" class="logo_regular" src="http://ams.ontiktechnology.com/uploads/op-logo/logo.png" alt="" height="15" width="71">
                <p style="line-height: 5px; margin-top: 35px;" class="uk-text-large">EMS Fusion</p>
                <p style="line-height: 5px;" class="heading_b uk-text-success">Profit and loss</p>
                <p style="line-height: 5px;" class="uk-text-small"> {{ ( ! empty($from_date) ? $from_date : '') }}   {{ ( ! empty($to_date) ? "to ".$to_date : '') }}</p>
            </div>

        </div>
        <div class="md-card-content">
            <h2> Income </h2>
            <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
                <thead>
                <tr>


                    <th style="text-align: center" width="70%">Ledger </th>
                    <th style="text-align: center" width="25">Balance</th>
                </tr>
                </thead>

                <tfoot>
                <tr>
                    <td  style="text-align: center" width="70%">Total</td>
                    <td id="profit_total" style="text-align: center" width="25%">0</td>

                </tr>
                </tfoot>

                <tbody  id="income">

                @foreach($ledger as $item)

                    <tr>


                        <td style="text-align: center"  width="70%">{{ $item->name }} </td>
                        @if($item->ix_status==1)
                            <td style="text-align: center"  width="25%">{{ $item->total }}</td>
                        @else
                            <td style="text-align: center"  width="25%">0</td>
                        @endif

                    </tr>

                    @endforeach


                </tbody>
            </table>

            <h2> Expense </h2>
            <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
                <thead>
                <tr>


                    <th style="text-align: center" width="70%">Ledger </th>
                    <th style="text-align: center" width="25">Balance</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <td  style="text-align: center" width="70%">Total</td>
                    <td id="loss_total" style="text-align: center" width="25%">0</td>

                </tr>
                </tfoot>



                <tbody  id="loss">


                @foreach($ledger as $item)

                    <tr>


                        <td style="text-align: center"  width="70%">{{ $item->name }} </td>
                        @if($item->ix_status==0)
                        <td style="text-align: center"  width="25%">{{ $item->total }}</td>
                        @else
                            <td style="text-align: center"  width="25%">0</td>
                       @endif
                    </tr>

                @endforeach


                </tbody>
            </table>

        </div>
    </div>
    <div id="page_heading" data-uk-sticky="{ top: 48, media: 960 }">

        <h1>Total Income - Total Expense: <span id="balance"> </span></h1>

    </div>
    <script>
        window.onload = function () {

            var rows = document.querySelector("#income").rows;
            var d= document.querySelector("#profit_total");
            var profitbalance = 0;
            for (var i = 0; i < rows.length; i++) {

                profitbalance = parseFloat(profitbalance)+ parseFloat(rows[i].cells[1].innerText);



            }
            d.innerText = profitbalance;

            var lrows = document.querySelector("#loss").rows;

            var l= document.querySelector("#loss_total");
            var lossbalance = 0;
            for (var i = 0; i < lrows.length; i++) {

                lossbalance = parseFloat(lossbalance)+ parseFloat(lrows[i].cells[1].innerText);



            }
            l.innerText = lossbalance;

            var d= document.querySelector("#balance");

           d.innerHTML = profitbalance - lossbalance;
        }
        /*
         window.onload = function () {
         var initbalance = 0;
         var rows = document.querySelector("#td_search").rows;

         for (var i = 0; i < rows.length; i++) {

         var row = rows[i].cells[1].innerText;
         var initbalance = parseFloat(rows[i].cells[1].innerText)+ parseFloat(rows[i].cells[2].innerText);
         // var cell = last.cells[0];
         //var value = cell.innerHTML
         if(i==0){
         initbalance = parseFloat(rows[i].cells[1].innerText)+ parseFloat(rows[i].cells[2].innerText);
         if(parseFloat(rows[i].cells[1].innerText)>0)
         {
         rows[i].cells[3].innerText ="+"+initbalance;
         }else{
         rows[i].cells[3].innerText ="-"+initbalance;
         }


         }else{

         var  balance = null;
         // console.log(parseFloat(rows[0].cells[3].innerText));
         var cell =rows[i].cells[1].innerText;


         if(cell>0)
         {
         balance= rows[i-1].cells[3].innerText;


         var cell_2 = rows[i].cells[1].innerText;
         var cell_3 = rows[i-1].cells[3].innerText;
         rows[i].cells[3].innerText = parseFloat(cell_3) + parseFloat(cell_2);
         // rows[i-1].cells[3].innerText = rows[i].cells[3].innerText
         //rows[i].cells[3].innerText ="+"+initbalance;
         }
         else
         {
         var cell_2 = rows[i].cells[2].innerText;
         var cell_3 = rows[i-1].cells[3].innerText;
         rows[i].cells[3].innerText = parseFloat(cell_3) + parseFloat(cell_2);
         console.log(cell_3);
         console.log(rows[i].cells[3].innerText);

         //rows[i].cells[3].innerText ="-"+initbalance;
         }


         }



         }

         }


         */


    </script>
@endsection


@section('custom_footer_js')
    <!-- page specific plugins -->
    <!-- datatables -->
    <script src="{{ asset('bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <!-- datatables buttons-->



@endsection