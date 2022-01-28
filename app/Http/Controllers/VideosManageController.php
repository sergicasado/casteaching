<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

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

    /** C -> Create -> Mostrarà a base de dades el nou */
    public function create()
    {
        //
    }

    /** C -> Create -> Guardarà a base de dades el nou Video */
    public function store(Request $request)
    {
        //
    }

    /** R -> NO LLISTA -> Individual  */
    public function show($id)
    {
        //
    }

    /** U -> Update -> Form  */
    public function edit($id)
    {
        //
    }

    /** U -> Update */
    public function update(Request $request, $id)
    {
        //
    }

    /** D -> Delete */
    public function destroy($id)
    {
        //
    }
}
