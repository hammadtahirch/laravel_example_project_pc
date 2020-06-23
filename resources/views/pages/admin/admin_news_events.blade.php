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
                            <h4>News & Events</h4>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12 text-right padding-zero">
                                <a href="{{url("/admin/news-event/create/0")}}" class="btn btn-success">Create News &
                                    Event</a>
                            </div>

                            <div class="clearfix"></div>
                            <?php echo flashMessage(); ?>
                            <div class="table-responsive text-nowrap mart20">
                                <table class=" table table-striped table-bordered table-sm table-md table-lg table-sx ">
                                    <thead>
                                    <tr>
                                        <th scope="col">#ID</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Start Date</th>
                                        <th scope="col">End Date</th>
                                        <th scope="col">Type</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!$data->isEmpty()){?>
                                    <?php foreach ($data as $index=>$newsEvent){?>
                                    <tr>
                                        <th scope="row">{{$newsEvent->id}}</th>
                                        <td>{{$newsEvent->title}}</td>
                                        <td>{{$newsEvent->description}}</td>
                                        <td>{{$newsEvent->location ?? "-"}}</td>
                                        <td>{{$newsEvent->start_date ?? "-"}}</td>
                                        <td>{{$newsEvent->end_date ?? "-"}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Success <span class="caret"></span>
                                                </button>
                                                <ul class="action dropdown-menu">
                                                    <li><a href="{{url("/admin/news-event/edit/".$newsEvent->id."")}}">View
                                                            &
                                                            Edit</a></li>
                                                    <li>
                                                        <a href="{{url("/admin/delete-news-event/".$newsEvent->id."")}}">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <?php }}else{?>
                                    <tr>
                                        <td colspan="7">
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
