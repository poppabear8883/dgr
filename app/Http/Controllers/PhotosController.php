<?php

namespace App\Http\Controllers;

use App\Photo\Contracts\PhotoInterface;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    /**
     * @var PhotoInterface
     */
    private $repo;

    public function __construct(PhotoInterface $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = $this->repo->all();
        return view('admin.photos', compact('photos'));
    }
}
