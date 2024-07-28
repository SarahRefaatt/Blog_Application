<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:tags,title',
        ]);

        $tag = Tag::create([
            'title' => $request->title,
        ]);

        return redirect()->back()->with('success', 'Tag created successfully.');
    }
}
