<?php

namespace App\Http\Controllers;

use App\Music;
use Illuminate\Http\Request;

class musicController extends Controller
{
    public function index(){

        $musics = Music::all();

        return view('homepage', compact('musics'));
      }
}
