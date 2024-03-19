<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $comics = Comic::all();
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
        $categories = [
            [
                'name' => 'digital comics',
                'image' => 'buy-comics-digital-comics.png'
            ],
            [
                'name' => 'dc merchandise',
                'image' => 'buy-comics-merchandise.png'
            ],
            [
                'name' => 'subscription',
                'image' => 'buy-comics-subscriptions.png'
            ],
            [
                'name' => 'comic shop locator',
                'image' => 'buy-comics-shop-locator.png'
            ],
            [
                'name' => 'dc power visa',
                'image' => 'buy-dc-power-visa.svg'
            ]
        ];
        $socials = [ 'footer-facebook.png', 'footer-periscope.png', 'footer-pinterest.png', 'footer-twitter.png', 'footer-youtube.png' ];

        return view('pages.welcome', compact('comics', 'headerNavLinks', 'footerNavSections', 'categories', 'socials'));
    }
}
