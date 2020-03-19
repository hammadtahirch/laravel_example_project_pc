<?php if($type === "edit"){?>

<div class="modal fade" id="{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="exampleModalLabel">Edit</h4>
            </div>
            <div class="modal-body">
                <form class="form-inline" id="form-id-{{$member->id}}" method="POST"
                      action="{{url("admin/board-member")."/".$member->id}}">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="text">Name:</label>
                        <input type="text" class="form-control" name="name" value="<?=$member->name?>"/>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Picture Url:</label>
                        <input type="text" class="form-control" name="picture_url" value="<?=$member->picture_url?>"/>
                    </div>
                    <div class="form-group">
                        <label for="text">Chapter Designation:</label>
                        <input type="text" class="form-control" name="chapter_designation"
                               value="<?=$member->chapter_designation?>"/>
                    </div>
                    <div class="form-group">
                        <label for="text">Email Address:</label>
                        <input type="text" class="form-control" name="email" value="<?=$member->email?>"/>
                    </div>
                    <div class="form-group">
                        <label for="text">Job Post:</label>
                        <input type="text" class="form-control" name="post" value="<?=$member->post?>"/>
                    </div>
                    <div class="form-group">
                        <label for="text">organization_name:</label>
                        <input type="text" class="form-control" name="organization_name"
                               value="<?=$member->organization_name?>"/>
                    </div>
                    <div class="form-group">
                        <label for="text">Description:</label>
                        <textarea style="min-height: 200px;" type="text" class="form-control"
                                  name="description"><?=$member->description?></textarea>
                    </div>
                    <button type="button" class="btn btn-default" onclick="formSubmit('form-id-{{$member->id}}')">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php }else if ($type === "create") { ?>
<div class="modal fade" id="{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="exampleModalLabel">Create</h4>
            </div>
            <div class="modal-body">
                <form class="form-inline" id="create_member" method="POST"
                      action="{{url("admin/board-member")}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="text">Name:</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Picture Url:</label>
                        <input type="text" class="form-control" name="picture_url" />
                    </div>
                    <div class="form-group">
                        <label for="text">Chapter Designation:</label>
                        <input type="text" class="form-control" name="chapter_designation"/>
                    </div>
                    <div class="form-group">
                        <label for="text">Email Address:</label>
                        <input type="text" class="form-control" name="email"/>
                    </div>
                    <div class="form-group">
                        <label for="text">Job Post:</label>
                        <input type="text" class="form-control" name="post"/>
                    </div>
                    <div class="form-group">
                        <label for="text">organization_name:</label>
                        <input type="text" class="form-control" name="organization_name"/>
                    </div>
                    <div class="form-group">
                        <label for="text">Description:</label>
                        <textarea style="min-height: 200px;" type="text" class="form-control"
                                  name="description"></textarea>
                    </div>
                    <button type="button" class="btn btn-default" onclick="createMember()">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php }?>
