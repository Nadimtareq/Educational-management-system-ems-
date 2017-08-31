<section style="padding: 30px 0;">
    <div class="container">

<div class="col-md-12">
    <div class="alert alert-mini alert-primary margin-bottom-30">

        <strong>BREAKING NEWS:</strong>

        <div class="owl-carousel controlls-over nomargin" data-plugin-options='{"autoPlay":3000, "stopOnHover":true, "items": 1, "singleItem": true, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
            @foreach($notice as $item)
            <div class="text-left size-14">
                <a href="#">{!! $item->title !!}.</a>
            </div>
            @endforeach
        </div>

    </div>

</div>