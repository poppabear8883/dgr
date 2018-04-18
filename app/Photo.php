<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $guarded = [];

    protected $hidden = ['pivot'];

    protected $appends = ['gallery_ids'];

    public function galleries()
    {
        return $this->belongsToMany(Gallery::class);
    }

    public function getGalleryIdsAttribute()
    {
        return $this->galleries()->pluck('id')->toArray();
    }
}
