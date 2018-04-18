<?php

namespace App\Image;

use App\Image\Contracts\ImageInterface;
use Illuminate\Filesystem\Filesystem;
use Intervention\Image\Image as Intervention;
use Intervention\Image\ImageManager;
use League\Glide\Server;

class Image implements ImageInterface
{

    /**
     * @var Filesystem
     */
    private $fs;

    /**
     * @var Server
     */
    private $server;

    /**
     * @var ImageManager
     */
    private $manager;

    public function __construct(Filesystem $fs, Server $server, ImageManager $manager)
    {
        $this->server = $server;
        $this->manager = $manager;
        $this->fs = $fs;
    }

    /**
     * Creates a Image and saves it to the filesystem
     *
     * @param $id
     * @param $source
     * @param string $ext
     * @return \Intervention\Image\Image
     * @throws \Exception
     */
    public function makeImage($id, $source, $ext = 'jpg')
    {
        $filename = $this->formatName($id, $ext);
        $image = $this->manager->make($source);

        $this->validateImage($image);

        return $image->save($this->getPath($filename));
    }

    /**
     * Gets the full Cover path
     *
     * @param $filename
     * @return string
     */
    public function getPath($filename)
    {
        return storage_path('app/images/'.$filename);
    }

    /**
     * Gets the full Cover Cache path
     *
     * @param $filename
     * @return string
     */
    public function getCachePath($filename)
    {
        return storage_path('app/images/.cache/'.$filename);
    }

    /**
     * Formats the Covers filename
     *
     * @param $id
     * @param $ext
     * @return string
     */
    public function formatName($id, $ext)
    {
        return "img-$id-".str_random().".$ext";
    }

    /**
     * Deletes the Cache at the given path
     *
     * @param $path
     * @return bool
     */
    public function deleteCache($path)
    {
        return $this->server->deleteCache($path);
    }

    /**
     * Deletes the Cover
     *
     * @param $filename
     * @return bool
     */
    public function deleteImage($filename)
    {
        return $this->fs->delete(storage_path('app/images/' . $filename));
    }

    /**
     * Validates the Cover Image
     *
     * @param Intervention $image
     * @return bool
     * @throws \Exception
     */
    public function validateImage($image)
    {
        $wide = null;

        if ($wide = $image->width() < 800 || $image->height() < 800) {
            $dimension = $wide ? 'wide' : 'high';

            throw new \Exception(
                "Image resolution is too small. Should be at least 800 $dimension"
            );
        }

        return true;
    }
}