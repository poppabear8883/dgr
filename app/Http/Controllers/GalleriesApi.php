<?php

namespace App\Http\Controllers;

use App\Gallery\Contracts\GalleryInterface;
use Illuminate\Http\Request;

class GalleriesApi extends Controller
{
    /**
     * @var GalleryInterface
     */
    private $repo;

    public function __construct(GalleryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function all()
    {
        return $this->repo->all();
    }

    /**
     * Create a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return response($this->repo->create($request->all()));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return response($this->repo->update($id, $request->all()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response($this->repo->delete($id));
    }
}
