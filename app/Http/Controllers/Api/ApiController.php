<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Videogame;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getFirstVideogame(){
        $firstVideogame = Videogame::orderBy('id', 'asc')->first();
        return response()->json($firstVideogame);
    }
}
