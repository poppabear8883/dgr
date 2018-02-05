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
        // TODO: Implement all() method.
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function findByName($name)
    {
        // TODO: Implement findByName() method.
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
        // TODO: Implement delete() method.
    }

    public function exists($name)
    {
        // TODO: Implement exists() method.
    }

    public function galleries()
    {
        // TODO: Implement galleries() method.
    }
}