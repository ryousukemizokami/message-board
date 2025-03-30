@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<div class="ml-4 prose">
    <h2>メッセージ新規作成ページ</h2>
</div>

<div class="flex justify-center">
    <form action="{{ route('messages.store') }}" method="POST" class="w-1/2">
        @csrf
        <div class="form-control my-4">
                    <label for="title" class="label">
                        <span class="label-text">タイトル:</span>
                    </label>
                    <input type="text" name="title" class="input input-bordered w-full">
                </div>
        <div class="form-control my-4">
            <label for="content" class="label">
                <span class="label-text">メッセージ</span>
            </label>
            <input type="text" name="content" class="input input-bordered w-full" />
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-outline">メッセージを投稿する</button>
        </div>
    </form>
</div>

@endsection