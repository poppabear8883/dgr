<?php

namespace App\Gallery\Repositories;

use App\Gallery;
use App\Gallery\Contracts\GalleryInterface;
use Illuminate\Contracts\Filesystem\Factory as Filesystem;
//use Intervention\Image\Image;
use Intervention\Image\ImageManager as Image;

class GalleryRepository implements GalleryInterface
{

    protected $path = 'images/gallery';

    /**
     * @var Gallery
     */
    private $gallery;

    /**
     * @var Filesystem
     */
    private $fs;

    /**
     * @var Image
     */
    private $image;

    public function __construct(Gallery $gallery, Filesystem $fs, Image $image)
    {
        $this->gallery = $gallery;
        $this->fs = $fs;
        $this->image = $image;
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

    /**
     * @param array $data
     * @return mixed
     * @throws \Exception
     */
    public function create(array $data)
    {
        $image = null;

        if ($data['img'] !== '') {
            $image = $this->makeCoverImage($data['name'], $data['img']);
        }

        if ($this->exists($data['name'])) {
            return $this->findByName($data['name']);
        }

        $gallery = $this->gallery->create([
            'name' => $data['name'],
            'description' => $data['description'],
            'img' => $image ? '/img/'.$image->filename : null
        ]);

        if ($this->exists($data['name'])) {
            return $gallery;
        }

        throw new \Exception('Unable to create resource');
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed
     * @throws \Exception
     */
    public function update($id, array $data)
    {
        $resource = $this->findById($id);

        if ($resource->update($data)) {
            return $resource;
        }

        throw new \Exception('Unable to update resource');
    }

    public function delete($id)
    {
        return $this->findById($id)->delete();
    }

    public function findById($id)
    {
        return $this->gallery->findOrFail($id);
    }

    public function findByName($name)
    {
        return $this->gallery->where('name', $name)->get();
    }

    public function exists($name)
    {
        if (!empty($this->findByName($name))) {
            return true;
        }

        return false;
    }

    protected function makeCoverImage($name, $source, $ext = 'jpg')
    {
        $filename = $this->generateCoverName($name, $ext);

        return $this->image
            ->make($source)
            ->resize(800, 600, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save($this->getCoverPath($filename));
    }

    protected function getCoverPath($filename)
    {
        return storage_path('app'.DIRECTORY_SEPARATOR.$this->path.DIRECTORY_SEPARATOR.$filename);
    }

    protected function generateCoverName($name, $ext)
    {
        return $name.'-cover.'.$ext;
    }


}