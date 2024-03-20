<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        $request->validate([
            'title' => 'required|unique:comics|max:100'
        ]);

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

        $headerNavLinks = [
            "Characters",
            "Comics",
            "Movies",
            "TV",
            "Games",
            "Collectibles",
            "Videos",
            "Fans",
            "News",
            "Shop"
        ];

        $footerNavSections = [
            [
                "title" => "DC Comics",
                "links" => [
                    "Characters",
                    "Comics",
                    "Movies",
                    "TV",
                    "Games",
                    "Videos",
                    "News"
                ]
            ],
            [
                "title" => "Shop",
                "links" => [
                    "Shop DC",
                    "Shop DC Collectibles"
                ]
            ],
            [
                "title" => "DC",
                "links" => [
                    "Terms of Use",
                    "Privacy policy (New)",
                    "Ad Choices",
                    "Advertising",
                    "Jobs",
                    "Subscriptions",
                    "Talent Workshops",
                    "CPSC Certificates",
                    "Ratings",
                    "Shop Help",
                    "Contact Us"
                ]
            ],
            [
                "title" => "Sites",
                "links" => [
                    "DC",
                    "MAD Magazine",
                    "DC Kids",
                    "DC Universe",
                    "DC Power Visa",
                ]
            ]
        ];
        $socials = ['footer-facebook.png', 'footer-periscope.png', 'footer-pinterest.png', 'footer-twitter.png', 'footer-youtube.png'];

        return view('pages.comicsViews.show', compact('comic', 'headerNavLinks', 'footerNavSections', 'socials'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);

        return view('pages.comicsViews.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'title' => [ 
                'required', 
                Rule::unique('comics')->ignore($id)     
            ]
        ]);

        $formData = $request->all();

        $comic = Comic::findOrFail($id);

        $comic->update($formData);

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::find($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
