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
            'video'         => 'mimes:mp4,wmv'
        ]);

        $video = new Video();
        $user = \Auth::user();
        $video->user_id = $user->id;
        $video->title = $request->input('title');
        $video->description = $request->input('description');


        //Subida de la miniatura

        $image = $request->file('image');
        if($image){
            $image_path = time().$image->getClientOriginalName();
            \Storage::disk('images')->put($image_path, \File::get($image));

            $video->image = $image_path;
        }

        //Subida del Video
        $video_file = $request->file('video');
        if($video_file){
            $video_path = time().$video_file->getClientOriginalName();
            \Storage::disk('videos')->put($video_path, \File::get($video_file));

            $video->video_path = $video_path;
        }


        $video->save();

        return redirect()->route('home')->with(array(
            'message' => 'Video subido correctamente'
        ));

        
        
        
        
        
    }
    
    //Metodo para obtener la imagen
    public function getImage($filename){
    
        $file = Storage::disk('images')->get($filename);
    
        return new Response($file, 200);
    
    }
}
