<x-tests.app>
    {{-- この部分が{{ $header }}に差し込まれる --}}
    <x-slot name="header">
        ヘッダー１
    </x-slot>

    {{-- この部分が{{ $slot }}に差し込まれる --}}
    コンポーネントテスト１

    <x-tests.card title="タイトル" content="本文" />
</x-tests.app>
