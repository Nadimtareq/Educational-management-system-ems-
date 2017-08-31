<div class="col-md-8">

    <div class="row">
        <div class="col-md-12">
            <!-- SLIDER AREA -->


            <div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"items": 1, "autoHeight": true, "navigation": true, "pagination": true, "transitionStyle":"backSlide", "progressBar":"true"}'>

                @foreach($slider as $value)


                    <a href="#">
                        <img alt="" class="img-responsive" src="{!! $value->img_url !!}">
                    </a>
                {{--<a href="#">
                    <img alt="" class="img-responsive" src="assetsh/images/demo/magazine/1-min.jpg">
                </a>
                <a href="#">
                    <img alt="" class="img-responsive" src="assetsh/images/demo/magazine/2-min.jpg">
                </a>
                <a href="#">
                    <img alt="" class="img-responsive" src="assetsh/images/demo/magazine/3-min.jpg">
                </a>--}}
                    @endforeach
            </div>
            <!-- /SLIDER AREA -->
        </div>
    </div>

</div>