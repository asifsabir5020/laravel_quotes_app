<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;


class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return response()->json($authors, 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $author = Author::create([
            'name' => $request->name,
        ]);

        return response()->json($author, 201);
    }

    public function show($id)
    {
        $author = Author::find($id);
        return response()->json($author, 200);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $author = Author::find($id);
        $author->name =  $request->name;
        $author->save();

        return response()->json($author, 201);
    }

    public function destroy($id)
    {
        $author = Author::find($id);
        $author->delete();
        return response()->json($author, 200);
    }
}
