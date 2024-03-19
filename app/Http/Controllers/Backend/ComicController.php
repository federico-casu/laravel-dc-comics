<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        
        return view('pages.comicsViews.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.comicsViews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->all();

        $newComic = new Comic();
        $newComic->fill($formData);
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::find($id);
        
        return view('pages.comicsViews.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::find($id);
        
        return view('pages.comicsViews.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $formData = $request->all();

       $comic = Comic::find($id);
       
       $comic->update($formData);

       return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
