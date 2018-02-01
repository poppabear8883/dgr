<?php

namespace App\Gallery\Repositories;

use App\Gallery;
use App\Gallery\Contracts\GalleryInterface;

class GalleryRepository implements GalleryInterface
{

    protected $path = 'images/gallery';

    /**
     * @var Gallery
     */
    private $gallery;

    public function __construct(Gallery $gallery)
    {
        $this->gallery = $gallery;
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

        if ($this->exists($data['name'])) {
            return $this->findByName($data['name']);
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
        return $this->gallery->whereName($name)->get();
    }

    public function exists($name)
    {
        if ($this->findByName($name)) {
            return true;
        }

        return false;
    }
}