<?php

namespace App\Http\Controllers;

use App\Music;
use Illuminate\Http\Request;


class MusicCrud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musics = Music::all();

        return view('homepage', compact('musics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sitemusic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validationForm($request);

        $data = $request->all();

        $music = new Music();

        $music->artist = $data['artist'];
        $music->title_song = $data['title_song'];
        $music->album = $data['album'];
        $music->year = $data['year'];
        $music->genre = $data['genre'];
        $music->cover = $data['cover'];
        $music->save();

        $music_stored = Music::orderBY('id','desc')->first();

        return redirect()->route('sitemusic.show', $music_stored);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Music $music)
    {
        return view('sitemusic.show', compact('music'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function validationForm(Request $request)
    {
       $request->validate([
           'artist' => 'required|max:255',
           'title_song' => 'required|max:255',
           'album'=>'required|max:255',
           'year'=>'required|between:0,2500',
           'genre'=>'required|max:255',
           'cover'=>'required|url',
       ]);
    }
}
