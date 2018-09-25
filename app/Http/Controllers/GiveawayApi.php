<?php

namespace App\Http\Controllers;

use App\Giveaway;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GiveawayApi extends Controller
{
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
            $model = Giveaway::findOrFail($id);
            $model->update([
                'ends_at' => Carbon::parse($request->ends_at),
            ] + $request->all());
            return response(['success' => true], 200);
        } catch (\Exception $e) {
            return response(['message' => $e->getMessage()], 422);
        }
    }

}
