<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{
    public function index()
    {
        $commentaires = Auth::user()->commentaires;
        return view('content.commentaires.index', compact('commentaires'));
    }

    public function create()
    {
        return view('content.commentaires.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'commentaire' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validatedData['image'] = 'images/' . $imageName;
        }

        $validatedData['user_id'] = auth()->user()->id;

        Commentaire::create($validatedData);

        return redirect()->route('commentaires.index')->with('success', 'Comment created successfully.');
    }

    public function edit(Commentaire $commentaire)
    {
        return view('content.commentaires.edit', compact('commentaire'));
    }

    public function update(Request $request, Commentaire $commentaire)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'commentaire' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validatedData['image'] = 'images/' . $imageName;
        }

        $commentaire->update($validatedData);

        return redirect()->route('commentaires.index')->with('success', 'Comment updated successfully.');
    }

    public function destroy(Commentaire $commentaire)
    {
        $commentaire->delete();
        return redirect()->route('commentaires.index')->with('success', 'Comment deleted successfully.');
    }
}
