<?php

namespace App\Models\Eloquent;


use Illuminate\Database\Eloquent\Model;

class JobPosting extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "title",
        "description",
        "organization_name",
        "start_app_date",
        "last_app_date"
    ];
}
