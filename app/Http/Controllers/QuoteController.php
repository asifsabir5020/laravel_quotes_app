<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::all();
        return response()->json($quotes, 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'quote' => 'required',
        ]);

        $quote = Quote::create([
            'quote' => $request->quote,
        ]);

        return response()->json($quote, 201);
    }

    public function show($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
