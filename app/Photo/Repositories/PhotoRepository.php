<?php

namespace App\Photo\Repositories;

use App\Photo;
use App\Photo\Contracts\PhotoImageInterface;
use App\Photo\Contracts\PhotoInterface;

class PhotoRepository implements PhotoInterface
{

    /**
     * @var Photo
     */
    private $photo;

    /**
     * @var PhotoImageInterface
     */
    private $image;

    public function __construct(Photo $photo, PhotoImageInterface $image)
    {
        $this->photo = $photo;
        $this->image = $image;
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

        try {
            $image = $this->image->makeImage($photo->id, $data['img']);
        } catch (\Exception $e) {
            $photo->delete();
            throw $e;
        }

        $photo->galleries()->attach($data['galleries']);

        $updated = $photo->update([
            'path' => "/img/photos/$image->basename"
        ]);

        if (!$updated) {
            $photo->delete();
            throw new \Exception('Unable to add Photo');
        }

        if (!$this->exists($data['name'])) {
            $photo->delete();
            throw new \Exception('Unable to create resource');
        }

        return $photo;
    }

    public function update($id, array $data)
    {
        $photo = $this->findById($id);
        $photo->update(['description' => $data['description']]);
        $photo->galleries()->detach();
        $photo->galleries()->attach($data['galleries']);

        return $photo;
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