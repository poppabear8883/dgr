<?php

namespace App\Gallery\Contracts;

interface GalleryInterface
{
    public function all();
    public function findById($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}