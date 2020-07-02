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
                            <h4>Create Job</h4>
                            <?php }else{?>
                            <h4>Edit Job</h4>
                            <?php } ?>

                        </div>
                        <div class="card-body">
                            <?php if (Request::segment(3) === "create") { ?>
                            <form method="POST" action="{{url("admin/job")}}">
                                <?php }else{?>
                                <form method="POST" action="{{url("admin/job")."/"}}<?= $job->id ?? ""?>">
                                    {{ method_field('PUT') }}
                                    <?php } ?>
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="text">Title:</label>
                                        <input type="text" class="form-control" name="title"
                                               value="<?=$job->title ?? ""?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Organization Name</label>
                                        <input type="text" class="form-control" name="organization_name"
                                               value="<?=$job->organization_name ?? "" ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Start Date</label>
                                        <input type="text" id="job_start_date" class="form-control" name="start_app_date"
                                               value="<?=$job->start_app_date ?? "" ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Last Date</label>
                                        <input type="text" id="job_end_date" class="form-control" name="last_app_date"
                                               value="<?=$job->last_app_date ?? "" ?>"/>
                                    </div>

                                    <div class="form-group">
                                        <label for="text">Description:</label>
                                        <textarea style="min-height: 200px;" type="text" class="form-control"
                                                  name="description"><?=$job->description ?? "" ?></textarea>
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

