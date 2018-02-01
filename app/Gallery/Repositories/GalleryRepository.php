<?php

namespace App\Gallery\Repositories;

use App\Gallery;
use App\Gallery\Contracts\GalleryInterface;
use Illuminate\Filesystem\Filesystem;

class GalleryRepository implements GalleryInterface
{

    protected $path = 'galleries';

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

    /**
     * @param array $data
     * @return mixed
     * @throws \Exception
     */
    public function create(array $data)
    {
        $path = $this->path.DIRECTORY_SEPARATOR.$data['name'];

        if ($this->exists($data['name'])) {
            return $this->findByName($data['name']);
        }

        if ($this->file->makeDirectory($path, 755, true)) {
            return $this->gallery->create($data);
        }

        throw new \Exception('Unable to create User resource');
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

        return $this->file->exists($this->path.DIRECTORY_SEPARATOR.$name);
    }
}