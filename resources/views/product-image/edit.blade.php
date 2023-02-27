<div class="bg-gray-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
          <div class="flex justify-between">
            <h2 class="text-2xl font-bold text-gray-900">Collections</h2>
            <form action="{{ route('product-image.destory', [ 'image' => $image->id ]) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="削除する">
            </form>
        </div>

        <div class="bg-gray-300">
            画像変更
        </div>
        <div class="bg-gray-300">
            <form action="{{ route('product-image.update', [ 'image' => $image ]) }}" method="post" enctype="multipart/form-data">
                @csrf
                    <label for="filename">画像を選択</label>
                    <input type="file" name="filename" accept="image/jpg, image/png">
                    <br>
                    <input type="submit" value="登録する">
            </form>
        </div>

        <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
          <div class="group relative">
            <h3 class="mt-6 text-sm text-gray-500">現在の画像</h3>
            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64">
              <img src="{{ asset('storage/products/'. $image->filename) }}" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="h-full w-full object-cover object-center">
            </div>
            <p class="text-base font-semibold text-gray-900">Work from home accessories</p>
          </div>
        </div>
      </div>
    </div>
  </div>

{{--  --}}

