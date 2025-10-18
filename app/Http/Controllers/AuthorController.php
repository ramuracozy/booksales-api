<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();
        return response()->json([
            'success' => true,
            "message" => "Get all authors",
            'data' => $authors
        ], 200);
    }

    public function store(Request $request)
    {
        // Validasi data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'nationality' => 'required|string|max:50',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'bio' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422);
        }

        // Upload foto
        $image = $request->file('photo');
        $image->store('authors', 'public');

        // Insert data ke database
        $author = Author::create([
            'name' => $request->name,
            'nationality' => $request->nationality,
            'photo' => $image->hashName(),
            'bio' => $request->bio,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Author created successfully',
            'data' => $author
        ], 201);
    }

    public function show($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Author not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Author found',
            'data' => $author
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Author not found'
            ], 404);
        }

        // Validasi data
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:100',
            'nationality' => 'sometimes|required|string|max:50',
            'photo' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'bio' => 'sometimes|required|string',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422);
        }
        // Siapkan data yang akan diupdate
        $data = $request->only(['name', 'nationality', 'bio']);

        // Update foto jika ada
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $image->store('authors', 'public');
            $data['photo'] = $image->hashName();

            // Hapus foto lama jika ada
            if ($author->photo) {
                Storage::disk('public')->delete('authors/' . $author->photo);
            }
        }

        // Update data ke database
        $author->update($data);
        return response()->json([
            'success' => true,
            'message' => 'Author updated successfully',
            'data' => $author
        ], 200);
    }

    public function destroy($id){
        $author = Author::find($id);
        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Author not found'
            ], 404);
        }

        // Hapus foto jika ada
        if ($author->photo) {
            Storage::disk('public')->delete('authors/' . $author->photo);
        }

        $author->delete();
        return response()->json([
            'success' => true,
            'message' => 'Author deleted successfully'
        ], 200);
    }
}

