<?php

namespace App\Gallery\Repositories;

use App\Gallery;
use App\Gallery\Contracts\GalleryInterface;

class GalleryRepository implements GalleryInterface
{
    /**
     * @var Gallery
     */
    private $gallery;

    public function __construct(Gallery $gallery)
    {
        $this->gallery = $gallery;
    }


    /**
     * Gets all galleries
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->gallery->all();
    }
}