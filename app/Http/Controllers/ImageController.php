<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Glide\Server;

class ImageController extends Controller
{
    /**
     * @var Server
     */
    private $server;

    public function __construct(Server $server)
    {
        $this->server = $server;
    }

    public function show(Request $request, $path)
    {
        ini_set('memory_limit', '512M');
        return $this->server->getImageResponse($path, $request->all());
    }
}
