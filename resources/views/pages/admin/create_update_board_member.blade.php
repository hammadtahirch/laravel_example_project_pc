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
                            <h4>Create Member</h4>
                            <?php }else{?>
                            <h4>Edit Member</h4>
                            <?php } ?>

                        </div>
                        <div class="card-body">
                            <?php if (Request::segment(3) === "create") { ?>
                            <form method="POST" action="{{url("admin/board-member")}}" enctype="multipart/form-data">
                                <?php }else{?>
                                <form method="POST" action="{{url("admin/board-member")."/"}}<?= $member->id ?? ""?>" enctype="multipart/form-data">
                                    {{ method_field('PUT') }}
                                    <?php } ?>
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="text">Name:</label>
                                        <input type="text" class="form-control" name="name"
                                               value="<?=$member->name ?? ""?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Picture Url:</label>
                                        <input type="file" class="form-control" name="picture_url"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Chapter Designation:</label>
                                        <input type="text" class="form-control" name="chapter_designation"
                                               value="<?=$member->chapter_designation ?? "" ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Email Address:</label>
                                        <input type="text" class="form-control" name="email"
                                               value="<?=$member->email ?? "" ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Job Post:</label>
                                        <input type="text" class="form-control" name="post"
                                               value="<?=$member->post ?? "" ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Organization Name:</label>
                                        <input type="text" class="form-control" name="organization_name"
                                               value="<?=$member->organization_name ?? "" ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Description:</label>
                                        <textarea style="min-height: 200px;" type="text" class="form-control"
                                                  name="description"><?=$member->description ?? "" ?></textarea>
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

