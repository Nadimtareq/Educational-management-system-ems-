@extends('layouts.backend.master')

@section('title')
   Staff  Dashboard
@endsection

@section('content')

    <div id="page_content_inner">
        <div class="pricing_table pricing_table_a uk-grid uk-grid-small uk-grid-width-medium-1-3 uk-grid-width-large-1-3 uk-margin-large-bottom" data-uk-grid-margin data-uk-grid-match="{target:'.md-card-content'}">

            <div>
                <div class="md-card payment">
                    <div class="md-card-content padding-reset" >
                        <div style="" class="pricing_table_plan md-bg-pink-500 md-color-white">Total Received</div>
                        <div class="pricing_table_price">
                           <h1> {!! $TotalRecieve  !!}</h1>
                        </div>

                    </div>
                </div>
            </div>

            {{-- <div class="uk-grid uk-grid-width-small-1-2 uk-grid-width-large-1-3 uk-grid-width-xlarge-1-5 uk-text-center uk-sortable sortable-handler" id="dashboard_sortable_cards" data-uk-sortable data-uk-grid-margin>
                 <div>
                     <div class="md-card md-card-hover md-card-overlay">
                         <div class="md-card-content">
                             <div class="epc_chart" data-percent="76" data-bar-color="#03a9f4">
                                 <h1> </h1>
                             </div>
                         </div>
                         <div class="md-card-overlay-content" style="background: #02A8F3;color: white;font-weight: bold;">
                             <div class="uk-clearfix md-card-overlay-header">
                                 <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                 <h3>
                                     Total Paid
                                 </h3>
                             </div>
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias consectetur.
                         </div>
                     </div>
                 </div>
 --}}


            <div>
                <div class="md-card payment">
                    <div class="md-card-content padding-reset" >
                        <div style="" class="pricing_table_plan md-bg-green-500 md-color-white">Total Leave</div>
                        <div class="pricing_table_price">
                            <h1> {!! $staff_leave[0]->days !!}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- google web fonts -->
    <script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
@endsection