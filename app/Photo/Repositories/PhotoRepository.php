<?php

namespace App\Photo\Repositories;

use App\Photo;
use App\Image\Contracts\ImageInterface;
use App\Photo\Contracts\PhotoInterface;

class PhotoRepository implements PhotoInterface
{

    /**
     * @var Photo
     */
    private $photo;

    /**
     * @var ImageInterface
     */
    private $image;

    public function __construct(Photo $photo, ImageInterface $image)
    {
        $this->photo = $photo;
        $this->image = $image;
        $this->image->prefix('photo');
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
        $name = $data['name'];
        $desc = $data['description'];
        $source = $data['img'];
        $galleries = $data['galleries'];

        if ($this->exists($name)) {
            throw new \Exception('Photo '.$name.' already exists');
        }

        $photo = $this->photo->create([
            'name' => $name,
            'description' => $desc
        ]);

        try {
            $image = $this->image->makeImage($photo->id, $source, 700, 400, 'galleries/photos');
        } catch (\Exception $e) {
            $photo->delete();
            throw $e;
        }

        $photo->galleries()->attach($galleries);

        $updated = $photo->update([
            'path' => "/images/galleries/photos/$image->basename"
        ]);

        if (!$updated) {
            $photo->delete();
            throw new \Exception('Unable to add Photo');
        }

        if (!$this->exists($name)) {
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
        try {
            $resource = $this->findById($id);
            $resource->galleries()->detach();
            $this->image->deleteImage($resource->img);
            return $resource->delete();
        } catch(\Exception $e) {
            return $e->getMessage();
        }
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