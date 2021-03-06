<?php

namespace App\Http\Controllers;

use App\Events\VideoCreated;
use App\Models\Video;
use Illuminate\Http\Request;
use Tests\Feature\Videos\VideosManageControllerTest;

class VideosManageController extends Controller
{
    public static function testedBy()
    {
        return VideosManageControllerTest::class;
    }


    public function index()
    {
        return view('videos.manage.index',[
            'videos' => Video::all()
            ]
        );
    }

    /** C -> Create -> MostrarĂ  a base de dades el nou */
    public function create()
    {
        //
    }

    /** C -> Create -> GuardarĂ  a base de dades el nou Video */
    public function store(Request $request)
    {
        $video = Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'url' => $request->url,
        ]);

        session()->flash('status', 'Successfully created');

        VideoCreated::dispatch($video);

        return redirect()->route('manage.videos');
    }

    /** U -> Update -> Form  */
    public function edit($id)
    {
        return view('videos.manage.edit',['video' => Video::findOrFail($id) ]);
    }

    /** U -> Update */
    public function update(Request $request, $id)
    {
        $video = Video::findOrFail($id);
        $video->title = $request->title;
        $video->description = $request->description;
        $video->url = $request->url;
        $video->save();

        session()->flash('status', 'Successfully updated');
        return redirect()->route('manage.videos');
    }

    /** D -> Delete */
    public function destroy($id)
    {
        Video::find($id)->delete();
        session()->flash('status', 'Successfully removed');
        return redirect()->route('manage.videos');
    }
}
