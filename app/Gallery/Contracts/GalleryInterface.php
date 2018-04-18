<?php

namespace App\Gallery\Contracts;

interface GalleryInterface
{
    public function all();
    public function paginate(int $per_page);
    public function findById($id);
    public function findByName($name);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function exists($name);
    public function photos($id);
}