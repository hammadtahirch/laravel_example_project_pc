<?php

namespace App\Models\Eloquent;


use Illuminate\Database\Eloquent\Model;

class EventGalleryImage extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "id",
        "egi_id",
        "img_url",
    ];
}
