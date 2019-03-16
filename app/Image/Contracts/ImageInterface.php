<?php

namespace App\Image\Contracts;

interface ImageInterface
{
    public function makeImage($id, $source, $width, $height);
    public function deleteImage($path);
    public function prefix($prefix = null);

    public function imagePath($path = null);
}