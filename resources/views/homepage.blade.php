@extends('sitemusic.base')

@section('title', 'Home page')
<a href="/sitemusic/create">Add Song</a>

@section('content')
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Artist</th>
        <th scope="col">Title_song</th>
        <th scope="col">Album</th>
        <th scope="col">Year</th>
        <th scope="col">Genre</th>
        <th scope="col">Cover</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($musics as $music )
        <tr>
            <td>{{$music->id}}</td>
            <td>{{$music->artist}}</td>
            <td>{{$music->title_song}}</td>
            <td>{{$music->album}}</td>
            <td>{{$music->year}}</td>
            <td>{{$music->genre}}</td>
            <td><img class="cover-resize" src="{{$music->cover}}" alt="album image"></td>
          </tr>
        @endforeach
    </tbody>
</table>
@stop
