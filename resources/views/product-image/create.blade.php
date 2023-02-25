これはproduct-index.createです
<div>
    <form action="{{ route('product-image.store') }}" method="post">
        @csrf
            <label for="filename">画像を選択</label>
            <input type="file" name="filename" accept="image/jpg, image/png">
            <br>
            <input type="submit" value="登録する">
    </form>
</div>
