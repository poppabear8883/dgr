<?php

namespace App\Image;

use App\Image\Contracts\ImageInterface;
use Illuminate\Filesystem\Filesystem;
use Intervention\Image\Image as Intervention;
use Intervention\Image\ImageManager;
use League\Glide\Server;

class Image implements ImageInterface
{
    protected $prefix = 'image';

    protected $basePath = 'public/images';


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
     */
    public function makeImage($id, $source, $width, $height, $dir = null)
    {
        $image = $this->manager->make($source);
        $filename = $this->formatName($id);

        if ($wide = $image->width() < $width || $image->height() < $height) {
            $dimension = $wide ? $width . 'px wide' : $height . 'px high';

            throw new \Exception(
                "Image resolution is too small. Should be at least $dimension"
            );
        }

        return $image->fit($width, $height)
            ->save($this->getPath($dir ? "{$dir}/{$filename}" : $filename));
    }

    /**
     * Gets the full Cover path
     *
     * @param $filename
     * @return string
     */
    public function getPath($filename)
    {
        return base_path($this->basePath().'/'.$filename);
    }

    /**
     * Formats the Covers filename
     *
     * @param $id
     * @param $ext
     * @return string
     */
    public function formatName($id)
    {
        return $this->prefix."-$id";
    }

    /**
     * Deletes the Cover
     *
     * @param $filename
     * @return bool
     */
    public function deleteImage($path)
    {
        return $this->fs->delete($path);
    }

    public function prefix($prefix = null)
    {
        if ($prefix === null) {
            return $this->prefix;
        }

        return $this->prefix = $prefix;
    }

    public function basePath($path = null)
    {
        if ($path === null) {
            return $this->basePath;
        }

        return $this->basePath = $path;
    }
}