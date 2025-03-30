@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<div class="prose ml-4">
    <h2>id: {{ $message->id }} のメッセージ編集ページ</h2>
</div>

<div class="prose ml-4">
    <form action="{{ route('messages.update', $message->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-control my-4">
                    <label for="title" class="label">
                        <span class="label-text">タイトル:</span>
                    </label>
                    <input type="text" name="title" value="{{ $message->title }}" class="input input-bordered w-full">
                </div>
        <div class="mb-4">
            <label for="content" class="block text-gray-700 text-sm font-bold mb-2">メッセージ内容</label>
            <textarea id="content" name="content" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $message->content }}</textarea>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">更新</button>
    </form>

@endsection