@extends('layout.admin_master')
@include('shared.admin_nav')
@section('content')
    <section id="feature" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 mart20 service-box">
                    <div class="card">
                        <div class="card-header">
                            <h4>Board Members</h4>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12 text-right padding-zero">
                                <a href="{{url("/admin/board-member/create/0")}}" class="btn btn-success">Create
                                    Member</a>
                            </div>

                            <div class="clearfix"></div>
                            <?php echo flashMessage(); ?>
                            <div class="table-responsive text-nowrap mart20">
                                <table class=" table table-striped table-bordered table-sm table-md table-lg table-sx ">
                                    <thead>
                                    <tr>
                                        <th scope="col">#ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Picture</th>
                                        <th scope="col">Ch. Designation</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Job Post</th>
                                        <th scope="col">Org. Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!$data->isEmpty()){?>
                                    <?php foreach ($data as $index=>$member){?>
                                    <tr>
                                        <th scope="row">{{$member->id}}</th>
                                        <td>{{$member->name}}</td>
                                        <td><img class="round-image" src="{{url("/images/".$member->picture_url)}}"/>
                                        </td>
                                        <td>{{$member->chapter_designation}}</td>
                                        <td>{{$member->email}}</td>
                                        <td>{{$member->post}}</td>
                                        <td>{{$member->organization_name}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Success <span class="caret"></span>
                                                </button>
                                                <ul class="action dropdown-menu">
                                                    <li><a href="{{url("/admin/board-member/edit/".$member->id."")}}">View
                                                            &
                                                            Edit</a></li>
                                                    <li><a href="{{url("/admin/delete-board-member/".$member->id."")}}">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <?php }?>
                                    <?php }else{?>
                                    <tr>
                                        <td colspan="8">
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

<script>
    function formSubmit(id) {
        $("#" + id).submit();
    }

    function deleteMember(id) {
        console.log("delete member");
    }

    function createMember() {
        console.log("create member")
        $("#create_member").submit();
    }
</script>

