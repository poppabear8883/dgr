<?php

namespace App\Photo\Repositories;

use App\Photo;
use App\Photo\Contracts\PhotoInterface;

class PhotoRepository implements PhotoInterface
{

    /**
     * @var Photo
     */
    private $photo;

    public function __construct(Photo $photo)
    {
        $this->photo = $photo;
    }


    public function all()
    {
        return $this->photo->all();
    }

    public function findById($id)
    {
        return $this->photo->findOrFail($id);
    }

    public function findByName($name)
    {
       return $this->photo->where('name', $name)->first();
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
    }

    public function update($id, array $data)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        return $this->findById($id)->delete();
    }

    public function exists($name)
    {
        if ($this->findByName($name)) {
            return true;
        }

        return false;
    }

    public function galleries()
    {
        return $this->photo->galleries();
    }
}