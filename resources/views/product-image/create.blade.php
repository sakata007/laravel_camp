<div class="bg-gray-300">
    これはproduct-index.createです
</div>
<div class="bg-gray-300">
    <form action="{{ route('product-image.store') }}" method="post" enctype="multipart/form-data">
        @csrf
            <label for="filename">画像を選択</label>
            <input type="file" name="filename" accept="image/jpg, image/png">
            <br>
            <input type="submit" value="登録する">
    </form>
</div>
