@extends('layouts.backend.master')

@section('content')
    <div class="md-card">
        <div class="md-card-content">
            <h2 class="text-align:center"> Sliders </h2>
        </div>
    </div>
    <div class="md-card">
        <div class="md-card-content">
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-1-1">
                    <div class="uk-overflow-container">
                        <table class="uk-table uk-table-align-vertical">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Slider Name</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $slider)
                            <tr>
                                <td><img class="img_thumb" src="{{ asset($slider->img_url)  }}" alt=""></td>
                                <td class="uk-text-large uk-text-nowrap"><a href="#">{{ $slider->name }}</a></td>
                                <td class="uk-text-nowrap">{{ $slider->created_at }}</td>
                                <td>{{ $slider->updated_at }}</td>

                                <td>
                                    <div class="parsley-row">

                                        @if($slider->status==0)
                                        <input type="checkbox" data-switchery id="slider_active" />
                                        @else
                                           <input type="checkbox" checked data-switchery id="slider_active" />
                                        @endif

                                    </div>
                                </td>
                                <td class="uk-text-nowrap">
                                                                <a onclick="deleterow(this); return false" href="{{ route('slider_delete',$slider->id) }}" class="uk-margin-left"><i class="material-icons md-24">&#xE872;</i></a>
                                </td>
                            </tr>

                          @endforeach
                            </tbody>
                        </table>
                        <script>

                            function deleterow(link) {
                                UIkit.modal.confirm('Are you sure?', function(){
                                    window.location.href = link;
                                });
                            }
                        </script>

                        <div class="md-fab-wrapper">
                            <a class="md-fab md-fab-accent" href="{{ route('slider_create') }}" id="recordAdd">
                                <i class="material-icons"></i>
                            </a>
                        </div>
                    </div>
                    <ul class="uk-pagination uk-margin-medium-top uk-margin-medium-bottom">
                        <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                        <li class="uk-active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><span>&hellip;</span></li>
                        <li><a href="#">20</a></li>
                        <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection