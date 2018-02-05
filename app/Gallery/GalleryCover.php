<?php
/**
 * NOTICE OF LICENSE
 *
 * UNIT3D is open-sourced software licensed under the GNU General Public License v3.0
 * The details is bundled with this project in the file LICENSE.txt.
 *
 * @project    UNIT3D
 * @license    https://choosealicense.com/licenses/gpl-3.0/  GNU General Public License v3.0
 * @author     poppabear
 * @date       2/3/18
 */

namespace App\Gallery;

use App\Gallery\Contracts\GalleryCoverInterface;
use Illuminate\Filesystem\Filesystem;
use Intervention\Image\Image;
use Intervention\Image\ImageManager;
use League\Glide\Server;

class GalleryCover implements GalleryCoverInterface
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
    private $image;

    public function __construct(Filesystem $fs, Server $server, ImageManager $image)
    {
        $this->server = $server;
        $this->image = $image;
        $this->fs = $fs;
    }

    /**
     * Creates a Cover Image and saves it to the filesystem
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
        $image = $this->image->make($source);

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
        return storage_path('app/images/gallery/'.$filename);
    }

    /**
     * Gets the full Cover Cache path
     *
     * @param $filename
     * @return string
     */
    public function getCachePath($filename)
    {
        return storage_path('app/images/.cache/gallery/'.$filename);
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
        return "cover-$id-".str_random().".$ext";
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
        return $this->fs->delete(storage_path('app/images/gallery/' . $filename));
    }

    /**
     * Validates the Cover Image
     *
     * @param Image $image
     * @return bool
     * @throws \Exception
     */
    public function validateImage($image)
    {
        $wide = null;

        if ($wide = $image->width() < 1200 || $image->height() < 1200) {
            $dimension = $wide ? 'wide' : 'high';

            throw new \Exception(
                "Image resolution is too small. Should be at least 1200 $dimension"
            );
        }

        return true;
    }
}