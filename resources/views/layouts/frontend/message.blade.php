<div class="col-md-4">
    <div class="row">
        <div class="col-md-12">

            <div class="heading-title heading-dotted text-center margin-bottom-20 margin-top-0">
                <h4>Principal's Message</h4>
            </div>

            @foreach($message as $value)
                @if($value->m_type==1)
                <p>
                    {!! $value->message !!}
               </p>
              @else
                    <p> No message</p>
                @endif
            @endforeach
            <a href="" class="btn btn-reveal btn-primary margin-top-0">
                <i class="fa fa-plus"></i>
                <span>Read More</span>
            </a>

        </div>
    </div>
</div>
</div>
</section>