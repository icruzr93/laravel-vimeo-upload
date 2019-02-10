<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vimeo\Vimeo;

class VideoController extends Controller
{
    public function save(Request $request)
    {
        $client = new Vimeo(
            config("vimeo.APP_ID"), 
            config("vimeo.APP_SECRET"), 
            config("vimeo.APP_TOKEN")
        );
        $title = $request->input('title');
        $description = $request->input('description');
        $video = $request->file('video');
        $uri = $client->upload($video, array(
            "name" => $title,
            "description" => $description
        ));

        return response()->json($uri, 201);
    }
}
