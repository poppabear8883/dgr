<?php

namespace App\Photo\Contracts;

interface PhotoImageInterface
{
    public function makeImage($id, $source, $ext = 'jpg');
    public function getPath($filename);
    public function getCachePath($filename);
    public function formatName($id, $ext);
    public function validateImage($image);
    public function deleteCache($path);
    public function deleteImage($filename);
}