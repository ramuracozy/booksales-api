<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(){
        $genres = Genre::all();
        return Response()->json([
            'success' => true,
            "essag" => "Get all genres",
            'data' => $genres
        ], 200);
    }
}
