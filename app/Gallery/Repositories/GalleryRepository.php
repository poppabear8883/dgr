<?php

namespace App\Gallery\Repositories;

use App\Gallery;
use App\Gallery\Contracts\GalleryInterface;
use Illuminate\Filesystem\Filesystem;

class GalleryRepository implements GalleryInterface
{

    protected $path = 'public/images/galleries';

    /**
     * @var Gallery
     */
    private $gallery;

    /**
     * @var Filesystem
     */
    private $file;

    public function __construct(Gallery $gallery, Filesystem $file)
    {
        $this->gallery = $gallery;
        $this->file = $file;
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

    public function create(array $data)
    {
        if ($this->exists($data['name'])) {
            return $this->findByName($data['name']);
        }

        $this->file->makeDirectory($data['name']);

        return $this->gallery->create($data);
    }

    public function update($id, array $data)
    {
        return $this->findById($id)->update($data);
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
        return $this->gallery->whereName($name)->get();
    }

    public function exists($name)
    {
        if (!$this->findByName($name)) {
            return false;
        }

        return $this->file->exists($this->getPath());
    }

    public function getPath($path = '')
    {
        return base_path($this->path) . "/$path";
    }
}