<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    public function index()
    {
        $about = Auth::user()->about;
        return view('content.about.index', compact('about'));
    }


    public function create()
    {
        return view('content.about.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $about = new About();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $about->image = 'images/' . $imageName;
        }
        $about->description = $validatedData['description'];
        $about->user_id = Auth::id();
        $about->save();

        return redirect()->route('abouts.index')->with('success', 'About created successfully.');
    }

    public function edit(About $about)
    {
        return view('content.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $about->image = 'images/' . $imageName;
        }

        $about->description = $validatedData['description'];
        $about->save();

        return redirect()->route('abouts.index')->with('success', 'About updated successfully.');
    }

    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('abouts.index')->with('success', 'About deleted successfully.');
    }
}
