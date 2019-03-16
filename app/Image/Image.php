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

    protected $imagePath;

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
    public function makeImage($id, $source, $width, $height)
    {
        $image = $this->manager->make($source);

        switch ($image->mime()) {
            case 'image/jpeg':
                $ext = '.jpg';
                break;
            case 'image/png':
                $ext = '.png';
                break;
            case 'image/gif':
                $ext = '.gif';
                break;
            default:
                $ext = '';
        }

        $filename = $this->prefix . '-' . $id . $ext;

        if ($wide = $image->width() < $width || $image->height() < $height) {
            $dimension = $wide ? $width . 'px wide' : $height . 'px high';

            throw new \Exception(
                "Image resolution is too small. Should be at least $dimension"
            );
        }

        return $image->fit($width, $height)
            ->save(public_path($this->imagePath . '/' . $filename));
    }

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

    public function imagePath($path = null)
    {
        if ($path === null) {
            return $this->imagePath;
        }

        return $this->imagePath = 'images/' . $path;
    }
}