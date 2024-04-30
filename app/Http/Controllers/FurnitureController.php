<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FurnitureController extends Controller
{
    public function index()
    {
        $furnitures = Auth::user()->Furnitures;
        return view('content.furnitures.index', compact('furnitures'));
    }

    public function create()
    {
        return view('content.furnitures.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validatedData['image'] = 'images/' . $imageName;
        }

        $validatedData['user_id'] = auth()->user()->id;

        Furniture::create($validatedData);

        return redirect()->route('furnitures.index')->with('success', 'Furniture created successfully.');
    }

    public function edit(Furniture $furniture)
    {
        return view('content.furnitures.edit', compact('furniture'));
    }

    public function update(Request $request, Furniture $furniture)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validatedData['image'] = 'images/' . $imageName;
        }

        $furniture->update($validatedData);

        return redirect()->route('furnitures.index')->with('success', 'Furniture updated successfully.');
    }

    public function destroy(Furniture $furniture)
    {
        $furniture->delete();
        return redirect()->route('furnitures.index')->with('success', 'Furniture deleted successfully.');
    }
}
