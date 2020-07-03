@extends('layout.master')
@section('content')
    <!--Feature-->
    <section id="feature" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="header-section text-center">
                    <h2>Event Gallery</h2>
                    <p></p>
                    <hr class="bottom-line">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @if(!$galleries->isEmpty())
                    @foreach($galleries as $gallery)
                        <div class="col-md-4 col-sm-6 padleft-right">
                            <figure class="imghvr-fold-up">
                                @if(!empty($gallery->random_gallery_image->img_url))
                                    <img  style="width: 385px; height: 385px;"
                                         src="{{url("/images/".$gallery->random_gallery_image->img_url)}}"
                                         class="img-responsive">
                                @else
                                    <img style="width: 385px; height: 385px;"
                                         src="{{url("/assets/default-image.png")}}"
                                         class="img-responsive">
                                @endif
                                <figcaption style="max-height: 400px; overflow-y: scroll;">
                                    <h3>{{$gallery->title}}</h3>
                                    <p>{{$gallery->description}}</p>
                                </figcaption>
                            </figure>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-warning" role="alert">
                        No media found.
                    </div>
                @endif
            </div>
            <div class="row text-center">{{$galleries->links()}}</div>
        </div>
    </section>
@stop

