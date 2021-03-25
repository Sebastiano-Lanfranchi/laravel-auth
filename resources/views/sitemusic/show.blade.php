@extends('sitemusic.base')
@section('title', 'Show')

@section('content')

<div class="card" style="width: 15rem;">
    <img class="card-img-top" src="{{$music->cover}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$music->title_song}}</h5>
      <div>Artist:{{$music->artist}}</div>
      <div>Album:{{$music->album}}</div>
      <div>Year:{{$music->year}}</div>
      <div>Genre:{{$music->genre}}</div>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
@stop
