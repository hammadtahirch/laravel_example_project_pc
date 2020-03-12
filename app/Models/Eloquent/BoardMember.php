<?php

namespace App\Models\Eloquent;


use Illuminate\Database\Eloquent\Model;

class BoardMember extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "picture_url",
        "chapter_designation",
        "email",
        "post",
        "organization_name",
        "description",
    ];
}
