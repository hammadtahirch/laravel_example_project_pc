@extends('layout.admin_master')
@include('shared.admin_nav')
@section('content')
    <section id="feature" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 mart20 service-box col-md-offset-2">
                    <div class="card">
                        <div class="card-header">
                            <?php if (Request::segment(3) === "create") { ?>
                            <h4>Create Gallery</h4>
                            <?php }else{?>
                            <h4>Edit Gallery</h4>
                            <?php } ?>

                        </div>
                        <div class="card-body">
                            <?php if (Request::segment(3) === "create") { ?>
                            <form method="POST" action="{{url("admin/gallery")}}">
                                <?php }else{?>
                                <form method="POST" action="{{url("admin/gallery/".$gallery->id)}}">
                                    {{ method_field('PUT') }}
                                    <?php } ?>
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="text">Title:</label>
                                        <input type="text" class="form-control" name="title"
                                               value="<?=$gallery->title ?? ""?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Description:</label>
                                        <textarea type="text" class="form-control"
                                                  name="description"><?=$gallery->description ?? ""?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-default">
                                        Submit
                                    </button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--@include("shared.admin_footer")--}}
@stop

