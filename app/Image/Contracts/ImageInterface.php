<?php

namespace App\Image\Contracts;

interface ImageInterface
{
    public function makeImage($id, $source, $ext = 'jpg', $validate = true);
    public function getPath($filename);
    public function getCachePath($filename);
    public function formatName($id, $ext);
    public function validateImage($image);
    public function deleteCache($path);
    public function deleteImage($filename);
    public function prefix($prefix = null);
    public function basePath($path = null);
    public function minWidth($px = null);
    public function minHeight($px = null);
}