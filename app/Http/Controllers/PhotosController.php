<?php

namespace App\Http\Controllers;

use App\Gallery\Contracts\GalleryInterface;
use App\Photo\Contracts\PhotoInterface;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    /**
     * @var PhotoInterface
     */
    private $photo;

    /**
     * @var GalleryInterface
     */
    private $gallery;

    public function __construct(PhotoInterface $photo, GalleryInterface $gallery)
    {
        $this->photo = $photo;
        $this->gallery = $gallery;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = $this->photo->all();
        $galleries = $this->gallery->all();

        return view('admin.photos', compact('photos', 'galleries'));
    }
}
