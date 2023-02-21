{{-- 以下で初期値を設定する --}}
{{-- 一つ設定したら、全ての属性で設定しないとエラー --}}
@props([
    'title' => 'タイトルの初期値',
    'content' => '',
    'message' => null,
])

{{-- ↓これだと、$attributesで元の設定が消えてしまう --}}
{{-- <div {{ $attributes }} class="border shadow-md w-1/4 p-2"> --}}
<div {{ $attributes->merge([
    'class' => 'border shadow-md w-1/4 p-2'
]) }}>
    <div>{{ $title }}</div>
    <div>画像</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
</div>
