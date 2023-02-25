<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\ProductImage;
use App\Models\ProductImage;

class ProductImageController extends Controller
{
    public function index()
    {
        $images = ProductImage::all();
        // dd('product-imageコントローラーです');
        return view('product-image.index', compact('images'));
    }

    public function create()
    {
        return view('product-image.create');
    }

    public function store(Request $request)
    {
        $image = ProductImage::create([
            'filename' => $request->filename
        ]);
        $image->save();

        return redirect()->route('product-image.index');

        // dd($image);
    }

}
