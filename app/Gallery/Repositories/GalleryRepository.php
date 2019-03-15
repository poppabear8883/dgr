<?php

namespace App\Gallery\Repositories;

use App\Gallery;
use App\Image\Contracts\ImageInterface;
use App\Gallery\Contracts\GalleryInterface;

class GalleryRepository implements GalleryInterface
{

    /**
     * @var Gallery
     */
    private $gallery;

    /**
     * @var ImageInterface
     */
    private $image;

    public function __construct(Gallery $gallery, ImageInterface $image)
    {
        $this->gallery = $gallery;
        $this->image = $image;
        $this->image->prefix('gallery');
    }

    /**
     * Gets all Gallery resources
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->gallery->all();
    }

    /**
     * Gets all Gallery resources
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function paginate(int $per_page)
    {
        return $this->gallery->paginate($per_page);
    }

    /**
     * Creates a Gallery resource
     *
     * @param array $data
     * @return mixed
     * @throws \Exception
     */
    public function create(array $data)
    {
        $image = null;
        $source = $data['img'];
        $name = $data['name'];
        $desc = $data['description'];

        if ($this->exists($name)) {
            throw new \Exception('Gallery ' . $name . ' already exists');
        }

        $gallery = $this->gallery->create([
            'name' => $name,
            'description' => $desc
        ]);

        if ($source !== '') {
            try {
                $image = $this->image->makeImage($gallery->id, $source, 700, 400, 'galleries');
            } catch (\Exception $e) {
                $gallery->delete();
                throw $e;
            }

            $updated = $gallery->update([
                'img' => "/images/galleries/$image->basename"
            ]);

            if (!$updated) {
                $gallery->delete();
                throw new \Exception('Unable to add image to the Gallery');
            }
        }

        if (!$this->exists($data['name'])) {
            $gallery->delete();
            throw new \Exception('Unable to create resource');
        }

        return $gallery;
    }

    /**
     * Updates a Gallery resource
     *
     * @param $id
     * @param array $data
     * @return mixed
     * @throws \Exception
     */
    public function update($id, array $data)
    {
        $resource = $this->findById($id);
        $image = null;
        $source = $data['img'];
        $name = $data['name'];
        $desc = $data['description'];

        if ($name !== $resource->name || $desc !== $resource->description) {

            $updated = $resource->update([
                'name' => $name,
                'description' => $desc
            ]);

            if (!$updated) {
                throw new \Exception('Unable to update the resource');
            }
        }

        if ($source !== $resource->img) {

            try {
                $image = $this->image->makeImage($resource->id, $source, 700, 400);
            } catch (\Exception $e) {
                throw $e;
            }

//            if ($resource->img !== null) {
//                $this->image->deleteCache($resource->img);
//                $this->image->deleteImage(basename($resource->img));
//            }

            $updated = $resource->update([
                'img' => "/images/galleries/$image->basename"
            ]);

            if (!$updated) {
                throw new \Exception('Unable to update the resources image');
            }
        }

        return $resource;
    }

    /**
     * Deletes a Gallery resource
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        $resource = $this->findById($id);
        $resource->photos()->detach();
        $this->image->deleteImage('/galleries/' . basename($resource->img));
        return $resource->delete();
    }

    /**
     * Gets a Gallery resource by its id
     *
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->gallery->findOrFail($id);
    }

    /**
     * Gets a Gallery resource by its name
     *
     * @param $name
     * @return mixed
     */
    public function findByName($name)
    {
        return $this->gallery
            ->where('name', $name)
            ->first();
    }

    /**
     * Checks if a Gallery resource exists
     *
     * @param $name
     * @return bool
     */
    public function exists($name)
    {
        if ($this->findByName($name)) {
            return true;
        }

        return false;
    }


    public function photos($id)
    {
        return $this->findById($id)->photos()->paginate(8);
    }
}