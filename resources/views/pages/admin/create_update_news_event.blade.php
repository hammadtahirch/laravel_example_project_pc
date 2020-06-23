@extends('layout.master')
@include('shared.admin_nav')
@section('content')
    <section id="feature" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 mart20 service-box col-md-offset-2">
                    <div class="card">
                        <div class="card-header">
                            <?php if (Request::segment(3) === "create") { ?>
                            <h4>Create News & Event</h4>
                            <?php }else{?>
                            <h4>Edit News & Event</h4>
                            <?php } ?>

                        </div>
                        <div class="card-body">
                            <?php if (Request::segment(3) === "create") { ?>
                            <form method="POST" action="{{url("admin/news-event")}}">
                                <?php }else{?>
                                <form method="POST" action="{{url("admin/news-event")."/"}}<?= $news_event->id ?? ""?>">
                                    {{ method_field('PUT') }}
                                    <?php } ?>
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="text">Title:</label>
                                        <input type="text" class="form-control" name="title"
                                               value="<?=$news_event->title ?? ""?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Location:</label>
                                        <input type="text" class="form-control" name="location"
                                               value="<?=$news_event->location ?? "" ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Start Date:</label>
                                        <input type="date" class="form-control" name="start_date"
                                               value="<?=$news_event->start_date ?? "" ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">End Date:</label>
                                        <input type="date" class="form-control" name="end_date"
                                               value="<?=$news_event->end_date ?? "" ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Description:</label>
                                        <textarea style="min-height: 200px;" type="text" class="form-control"
                                                  name="description"><?=$news_event->description ?? "" ?></textarea>
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

