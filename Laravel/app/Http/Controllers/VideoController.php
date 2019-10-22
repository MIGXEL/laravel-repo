<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Synfony\Component\HttpFoundation\Response;

use App\Video;
use App\Comment;


class VideoController extends Controller
{
    public function createVideo(){
        return view('video.createVideo');
    }

    public function saveVideo(Request $request){

        //validar formulario

        $validatedData = $request->validate([
            'title'        => 'required|min:5',
            'description'   => 'required',
            'image'         => 'mimes:jpeg,jpg,png',
            'video'         => 'mimes:mp4'
        ]);

        $video = new Video();
        $user = \Auth::user();
        $video->user_id = $user->id;
        $video->title = $request->input('title');
        $video->descripcion = $request->input('decription');

        $video->save();

        return redirect()->route('home')->with(array(
            'message' => 'Video subido correctamente'
        ));


    }
}
