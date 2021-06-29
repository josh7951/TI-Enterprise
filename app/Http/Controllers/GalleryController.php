<?php

namespace App\Http\Controllers;

use App\Models\Image;
// use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index() {
        $images = Image::all();
        return view('gallery')
            -> with('images', $images);
    }
}
