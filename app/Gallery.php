<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = [];

    protected $hidden = ['pivot'];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
