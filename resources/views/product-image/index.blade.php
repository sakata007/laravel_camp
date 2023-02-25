<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
これはproduct-image.indexです。


<div class="container">
    <div>
        <a href="{{ route('product-image.create') }}">画像を登録する</a>
    </div>
    <div class="flex">
        @foreach ($images as $image)
            <div class="blex-box">
                <a href="{{ route('product-image.show', [ 'product-image' => $image->id ]) }}"><img src="{{ asset('images/'. $image->filename) }}" alt="" ></a>
            </div>
        @endforeach
    </div>

</div>
