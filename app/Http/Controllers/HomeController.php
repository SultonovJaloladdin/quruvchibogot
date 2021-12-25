<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

}

/**
 * Switch language
 */
// public function switchLang($lang)
// {
//     session()->put('lang', $lang);

//     return redirect()->back();
// }

/**
 * About page
 */
// public function about()
// {
//     $images = Gallery::latest()->limit(6)->get();
//     $content = Page::where('slug', 'about-us')->first();

//     if (!$content)
//         return abort(404);

//     return view('about', compact('content', 'images'));
// }

/**
 * Pagination
 *
 */
// public function galleryOffset(Request $request)
// {
//     $id = $request->get('id');
//     $images = Gallery::where('id', '<', $id)
//         ->orderBy('id', 'DESC')
//         ->limit(3)
//         ->get();

//     return view('gallery._item', compact('images'));
// }
