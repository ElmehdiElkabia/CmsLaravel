<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        $about = $this->about();
        $sliders = $this->sliders();
        $blogs = $this->blogs();
        $commentaires = $this->commentaires();
        $furnitures = $this->furnitures();

        return view('page', compact('about', 'sliders', 'blogs', 'commentaires', 'furnitures'));
    }
    public function about()
    {
        // Check if the authenticated user is not null
        if (Auth::check()) {
            // Retrieve the authenticated user
            $user = Auth::user();

            // Check if the user has an 'about' relationship
            if ($user->about) {
                // If 'about' relationship exists, return it
                return $user->about;
            } else {
                // If 'about' relationship does not exist, return null or handle it as needed
                return null;
            }
        } else {
            // If the user is not authenticated, return null or handle it as needed
            return null;
        }
    }

    public function sliders()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Retrieve the authenticated user
            $user = Auth::user();

            // Check if the user has the 'homes' relationship
            if ($user->homes) {
                // If 'homes' relationship exists, return it
                return $user->homes;
            } else {
                // If 'homes' relationship does not exist, return an empty array or handle it as needed
                return [];
            }
        } else {
            // If the user is not authenticated, return an empty array or handle it as needed
            return [];
        }
    }

    public function blogs()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Retrieve the authenticated user
            $user = Auth::user();

            // Check if the user has the 'blogs' relationship
            if ($user->blogs) {
                // If 'blogs' relationship exists, return it
                return $user->blogs;
            } else {
                // If 'blogs' relationship does not exist, return an empty array or handle it as needed
                return [];
            }
        } else {
            // If the user is not authenticated, return an empty array or handle it as needed
            return [];
        }
    }

    public function commentaires()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Retrieve the authenticated user
            $user = Auth::user();

            // Check if the user has the 'commentaires' relationship
            if ($user->commentaires) {
                // If 'commentaires' relationship exists, return it
                return $user->commentaires;
            } else {
                // If 'commentaires' relationship does not exist, return an empty array or handle it as needed
                return [];
            }
        } else {
            // If the user is not authenticated, return an empty array or handle it as needed
            return [];
        }
    }

    public function furnitures()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Retrieve the authenticated user
            $user = Auth::user();

            // Check if the user has the 'furnitures' relationship
            if ($user->furnitures) {
                // If 'furnitures' relationship exists, return it
                return $user->furnitures;
            } else {
                // If 'furnitures' relationship does not exist, return an empty array or handle it as needed
                return [];
            }
        } else {
            // If the user is not authenticated, return an empty array or handle it as needed
            return [];
        }
    }

}
