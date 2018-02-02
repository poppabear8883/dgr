<?php

namespace App\Http\Controllers;

use App\Gallery\Contracts\GalleryInterface;
use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    /**
     * @var GalleryInterface
     */
    private $repo;

    public function __construct(GalleryInterface $repo)
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
        $galleries = $this->repo->all();
        return view('admin.galleries', compact('galleries'));
    }
}
