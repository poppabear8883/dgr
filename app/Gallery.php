<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = [];

    protected $hidden = ['pivot'];

    protected $appends = ['photo_count'];

    public function photos()
    {
        return $this->belongsToMany(Photo::class);
    }

    public function getPhotoCountAttribute()
    {
        return $this->belongsToMany(Photo::class)->count('id');
    }
}
