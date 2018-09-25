<?php

namespace App\Image;

use App\Image\Contracts\ImageInterface;
use Illuminate\Filesystem\Filesystem;
use Intervention\Image\Image as Intervention;
use Intervention\Image\ImageManager;
use League\Glide\Server;

class Image implements ImageInterface
{

    protected $minWidth = 800;

    protected $minHeight = 800;

    protected $prefix = 'img';

    protected $basePath = 'app/images';


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
     * @param bool $validate
     * @return \Intervention\Image\Image
     * @throws \Exception
     */
    public function makeImage($id, $source, $ext = 'jpg', $validate = true)
    {
        $filename = $this->formatName($id, $ext);
        $image = $this->manager->make($source);

        if ($validate) {
           $this->validateImage($image);
        }

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
        return storage_path($this->basePath().'/'.$filename);
    }

    /**
     * Gets the full Cover Cache path
     *
     * @param $filename
     * @return string
     */
    public function getCachePath($filename)
    {
        return storage_path($this->basePath().'/.cache/'.$filename);
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
        return $this->prefix."-$id.$ext";
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
        return $this->fs->delete(storage_path($this->basePath() . $filename));
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

    public function minWidth($px = null)
    {
        if ($px === null) {
            return $this->minWidth;
        }

        return $this->minWidth = $px;
    }

    public function minHeight($px = null)
    {
        if ($px === null) {
            return $this->minHeight;
        }

        return $this->minHeight = $px;
    }
}