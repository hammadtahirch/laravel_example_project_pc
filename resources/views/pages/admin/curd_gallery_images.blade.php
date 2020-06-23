@extends('layout.master')
@include('shared.admin_nav')
@section('content')
    <section id="feature" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 mart20 service-box col-md-offset-2">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Images</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{url("/admin/gallery-image/{$gallery_id}/image")}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="pwd">Upload Image</label>
                                    <input type="file" class="form-control"
                                           name="image_url"/>
                                </div>
                                <button type="submit" class="btn btn-default">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @if(!$galleryImages->isEmpty())
                    @foreach($galleryImages as $image)
                        <div class="col-md-3 col-sm-6" style="box-shadow:none; margin-top: 30px;">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{url("images/".$image->img_url)}}" style="width: 250px; height: 250px;">
                                </div>
                                <div class="card-footer">
                                    <a href="{{url("/admin/gallery-image/{$gallery_id}/image/{$image->id}")}}" class="btn btn-danger" style="margin-top: 10px;">
                                        X
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    {{--@include("shared.admin_footer")--}}
@stop

