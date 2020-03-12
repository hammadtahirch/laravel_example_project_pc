<?php

namespace App\Models\Eloquent;


use Illuminate\Database\Eloquent\Model;

class EventGallery extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "title",
        "description",
    ];
}
