<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    public function index(){
        $genres = Genre::all();
        return response()->json([
            'success' => true,
            "essag" => "Get all genres",
            'data' => $genres
        ], 200);
    }

    public function store(Request $request)
    {
        // 1. Validasi data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'description' => 'required|string',
        ]);

        // 2. Cek vaidasi error
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422);
        }

        // 4. Insert data ke database
        $genre= Genre::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // 5. Response
        return response()->json([
            'success' => true,
            'message' => 'Genre created successfully',
            'data' => $genre
        ], 201);
    }

    
}
