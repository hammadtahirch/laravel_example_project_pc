<?php

namespace App\Models\Eloquent;


use Illuminate\Database\Eloquent\Model;

class NewsEvent extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "title",
        "description",
        "location",
        "start_date",
        "end_date",
    ];
}
