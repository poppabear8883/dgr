<?php

namespace App\Photo\Contracts;

interface PhotoInterface
{
    public function all();
    public function findById($id);
    public function findByName($name);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function exists($name);
    public function galleries();
}