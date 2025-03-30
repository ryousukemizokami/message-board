@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<div class="ml-4">
    <h2>メッセージ一覧</h2>
</div>

@if(isset($messages))

<table class="table table-zebra w-full my-4">
    <thead>
        <tr>
            <th>id</th>
            <th>タイトル</th>
            <th>メッセージ</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($messages as $message)
        <tr>
            <td>{{ $message->id }}</td>
            <td><a href="{{ route('messages.show', ['message' => $message->id]) }}">{{ $message->title }}</a></td>
            <td><a href="{{ route('messages.show', ['message' => $message->id]) }}">{{ $message->content }}</a></td>
        </tr>
        @endforeach
</table>
@endif

<!-- メッセージ作成ページへのリンク -->
<a class="btn btn-primary" href="{{ route('messages.create') }}">新規メッセージの投稿</a>
@endsection