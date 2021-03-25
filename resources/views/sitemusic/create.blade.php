@extends('sitemusic.base')
@section('title', 'create')
@section('content')
<form action="{{route('sitemusic.store')}}" method="post">
    @csrf
    @method('POST')

    <div class="form-group">
      <label for="artist">Artist</label>
      <input type="text" class="form-control {{ $errors->has('artist') ? 'is-invalid' : ''}}" name="artist" placeholder="Artist">
      <div class="invalid-feedback">
        {{$errors->first('artist')}}
      </div>
    </div>
    <div class="form-group">
        <label for="title_song">Title_song</label>
        <input type="text" class="form-control {{ $errors->has('title_song') ? 'is-invalid' : ''}}" name="title_song" placeholder="title_song">
      <div class="invalid-feedback">
        {{$errors->first('title_song')}}
      </div>
    </div>
    <div class="form-group">
        <label for="album">Album</label>
        <input type="text" class="form-control {{ $errors->has('album') ? 'is-invalid' : ''}}" name="album" placeholder="album">
      <div class="invalid-feedback">
        {{$errors->first('album')}}
      </div>
    </div>
    <div class="form-group">
        <label for="year">Year</label>
        <input type="text" class="form-control {{ $errors->has('year') ? 'is-invalid' : ''}}" name="year" placeholder="year">
      <div class="invalid-feedback">
        {{$errors->first('year')}}
      </div>
    </div>
    <div class="form-group">
        <label for="genre">Genre</label>
        <input type="text" class="form-control {{ $errors->has('genre') ? 'is-invalid' : ''}}" name="genre" placeholder="genre">
      <div class="invalid-feedback">
        {{$errors->first('genre')}}
      </div>
    </div>
    <div class="form-group">
        <label for="cover">Cover</label>
        <input type="text" class="form-control {{ $errors->has('cover') ? 'is-invalid' : ''}}" name="cover" placeholder="cover">
      <div class="invalid-feedback">
        {{$errors->first('cover')}}
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Invia</button>
  </form>
  @stop
