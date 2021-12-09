<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/videos/1', function () {
//    return 'Ubuntu 101 | Here description | December 13';
    return view('videos.show',[
        'title' => 'Ubuntu 101',
        'description' => 'Here description',
        'published_at' => 'December 13'
    ]); // CRUD -> RETRIEVE -> nomes un video
});

