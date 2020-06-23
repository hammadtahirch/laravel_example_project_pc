@extends('layout.master')
@include('shared.admin_nav')
@section('content')
    <!--    --><?php //echo "<pre>";print_r($data);  echo "</pre>"; die;?>
    <section id="feature" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 mart20 service-box">
                    <div class="card">
                        <div class="card-header">
                            <h4>Job Posting</h4>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12 text-right padding-zero">
                                <a href="{{url("/admin/job/create/0")}}" class="btn btn-success">Create
                                    Job</a>
                            </div>

                            <div class="clearfix"></div>
                            <?php echo flashMessage(); ?>
                            <div class="table-responsive text-nowrap mart20">
                                <table class=" table table-striped table-bordered table-sm table-md table-lg table-sx ">
                                    <thead>
                                    <tr>
                                        <th scope="col">#ID</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Organization Name</th>
                                        <th scope="col">Start Date</th>
                                        <th scope="col">Last Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!$data->isEmpty()){ ?>
                                    <?php foreach ($data as $index=>$job){?>
                                    <tr>
                                        <th scope="row">{{$job->id}}</th>
                                        <td>{{$job->title}}</td>
                                        <td>{{$job->organization_name}}</td>
                                        <td>{{$job->start_app_date}}</td>
                                        <td>{{$job->last_app_date}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Success <span class="caret"></span>
                                                </button>
                                                <ul class="action dropdown-menu">
                                                    <li><a href="{{url("/admin/job/edit/".$job->id."")}}">View
                                                            &
                                                            Edit</a></li>
                                                    <li><a href="{{url("/admin/delete-job/".$job->id."")}}">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <?php }}else{?>
                                    <tr>
                                        <td colspan="6">
                                            No Records. Please create new.
                                        </td>
                                    </tr>
                                    <?php }?>

                                    </tbody>
                                </table>
                                <div class="text-center">{{$data->links()}}</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--@include("shared.admin_footer")--}}
@stop
