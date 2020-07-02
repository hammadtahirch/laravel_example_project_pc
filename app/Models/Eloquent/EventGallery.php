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
        "id",
        "title",
        "description",
    ];
    protected $appends = ['random_gallery_image'];
    public function getRandomGalleryImageAttribute(){
        $collection =  EventGalleryImage::query()->where(["egi_id"=>$this->id])->get();
        if(!$collection->isEmpty()){
            return $collection->random(1)->first();
        }
        return $collection;
    }
}
