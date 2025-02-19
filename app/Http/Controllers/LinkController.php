<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Link::all();

        return view("link", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create-link");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Link::create([
            "name" => $request->name,
            "url" => $request->url,
            "category" => $request->category
        ]);

        return redirect()->route("link.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $link = Link::findOrFail($id);

        return view("detail", compact("link"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $link = Link::findOrFail($id);

        return view("edit", compact("link"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        $linkSelected = Link::findOrFail($id);
        $linkSelected->update([
            "name" => $request->name,
            "url" => $request->url,
            "category" => $request->category
        ]);

        return redirect()->route("link.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $link = Link::findOrFail($id);
        $link->delete();

        return redirect()->route("link.index");
    }
}
