<?php

namespace App\Image\Contracts;

interface ImageInterface
{
    public function makeImage($id, $source, $width, $height, $dir = null);
    public function getPath($filename);
    public function formatName($id);
    public function deleteImage($path);
    public function prefix($prefix = null);
    public function basePath($path = null);
}