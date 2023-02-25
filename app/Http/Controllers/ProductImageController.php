<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\ProductImage;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;
use InterventionImage;

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
            // dd($request);
        // $image = ProductImage::create([
        //     'filename' => $request->filename
        // ]);
        // $image->save();

        // $filename = $request->filename;
        // Storage::putFile('public/products', $filename); //リサイズなしの場合

        $inputImage = $request->filename; //$requestからファイル名を取得
        $fileName = uniqid(rand(). '_'); //ランダムな名前を生成
        $extension = $inputImage->extension(); //取得したファイル名の拡張子を取得
        $fileNameToStore = $fileName . '.' . $extension; //ランダムな名前と拡張子を結合
        // mekeとすることで使うことができる、encodeで画像として扱うことができる
        $resizedImage = InterventionImage::make($inputImage)
        ->resize(1920, 1080)
        ->encode();
        Storage::put('public/products/' . $fileNameToStore, $resizedImage);

        ProductImage::create([
            'filename' => $fileNameToStore
        ]);

        return redirect()->route('product-image.index');
    }

    public function edit($id)
    {
        $image = ProductImage::findOrFail($id);
        dd($image);
    }

}
