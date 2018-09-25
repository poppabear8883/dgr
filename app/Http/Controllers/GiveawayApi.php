<?php

namespace App\Http\Controllers;

use App\Giveaway;
use App\Image\Contracts\ImageInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GiveawayApi extends Controller
{
    /**
     * @var ImageInterface
     */
    private $image;

    public function __construct(ImageInterface $image)
    {
        $this->image = $image;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $image = null;
        $resource = null;

        try {
            $resource = Giveaway::findOrFail($id);
            $this->processImages($request, $resource);
        } catch (\Exception $e) {
            return response(['message' => $e->getMessage()], 422);
        }

        $resource->update([
            'ends_at' => Carbon::parse($request->ends_at),
            'title' => $request->title,
            'description' => $request->description,
            'features' => $request->features
        ]);

        return response(['success' => true], 200);
    }

    protected function processImages(Request $request, $resource)
    {
        $images = [
            'image',
            'product_image',
            'product_image_2',
            'product_image_3',
            'product_image_4',
        ];

        foreach ($images as $img) {
            if ($request->$img !== $resource->$img && $request->$img !== null) {

                try {
                    $image = $this->image->makeImage("ga_$img", $request->$img, 'jpg', false);
                } catch (\Exception $e) {
                    throw $e;
                }

                if ($resource->$img !== null) {
                    $this->image->deleteCache($resource->$img);
                    $this->image->deleteImage(basename($resource->$img));
                }

                $resource->update([
                    $img => "/img/$image->basename"
                ]);
            }
        }

    }

}
