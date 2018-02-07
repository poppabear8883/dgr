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

    /**
     * @param array $data
     * @return mixed
     * @throws \Exception
     */
    public function create(array $data)
    {
        $image = null;

        if ($this->exists($data['name'])) {
            throw new \Exception('Photo '.$data['name'].' already exists');
        }

        $photo = $this->photo->create([
            'name' => $data['name'],
            'description' => $data['description']
        ]);

        if ($data['img']) {
            $image = $this->cover->makeImage($photo->id, $data['img']);

            $updated = $photo->update([
                'img' => "/img/$image->basename"
            ]);

            if (!$updated) {
                throw new \Exception('Unable to add Photo');
            }
        }

        if (!$this->exists($data['name'])) {
            throw new \Exception('Unable to create resource');
        }

        return $photo;
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