<x-tests.app>
    {{-- この部分が{{ $header }}に差し込まれる --}}
    <x-slot name="header">
        ヘッダー１
    </x-slot>

    {{-- この部分が{{ $slot }}に差し込まれる --}}
    コンポーネントテスト１

    {{-- 属性を渡すパターン --}}
    <x-tests.card title="タイトル" content="本文" :message="$message"/>
    <x-tests.card title="タイトル"/>
    <x-tests.card title="cssを変更したい" class="bg-red-300"/>
</x-tests.app>
