<?php

namespace App\Http\Controllers;

use App\Gallery\Contracts\GalleryInterface;
use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Factory as Filesystem;

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
        try {
            return response($this->repo->create($request->all()), 201);
        } catch (\Exception $e) {
            return response(['message' => $e->getMessage()], 422);
        }
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
        try {
            return response($this->repo->update($id, $request->all()), 200);
        } catch (\Exception $e) {
            return response(['message' => $e->getMessage()], 422);
        }
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
