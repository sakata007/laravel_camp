<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
これはproduct-image.indexです。
<img src="/storage/app/public/products/1775665875_63f9a19007ef6.jpg" alt="">


<div class="container">
    <div>
        <a href="{{ route('product-image.create') }}">画像を登録する</a>
    </div>
    <div class="flex">
        @foreach ($images as $image)
            <div class="blex-box">
                    <img src="{{ asset('storage/products/'. $image->filename) }}" alt="" >
            </div>
            <div>
                <a href="{{ route('product-image.edit', ['product-image' => $image->id] ) }}">編集する</a>
            </div>
        @endforeach
    </div>
</div>
