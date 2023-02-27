<head>
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

  <div class="bg-white">
      <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="flex justify-between">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">(TEST)画像一覧</h2>
            <a href="{{ route('product-image.create') }}" class="rounded-md bg-red-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                画像を登録する
            </a>
        </div>

        <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
          @foreach ($images as $image)
          <div class="group relative">
            <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
              <img src="{{ asset('storage/products/'. $image->filename) }}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 mb-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Basic Tee
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Black</p>
              </div>
              <p class="text-sm font-medium text-gray-900">金額</p>
            </div>
        </div>
        <div class="mt-8">
            <a href="{{ route('product-image.edit', ['image' => $image->id]) }}" class="rounded-md bg-gray-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
                画像を変更する
            </a>
        </div>
          @endforeach

          <!-- More products... -->
        </div>

      </div>
    </div>
</body>
