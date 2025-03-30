<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message; // Messageモデルをインポート

class MessagesController extends Controller
{
    // getでmessages/にアクセスされた場合の「一覧表示処理」
    public function index()
    {
        // メッセージ一覧を取得
        $messages = Message::orderBy('id', 'asc')->paginate(25);
        // ビューにメッセージ一覧を渡す
        return view('messages.index', compact('messages'));
        // return view('messages.index', ['messages' => $messages]);
    }

    // getでmessages/createにアクセスされた場合の「新規登録画面表示処理」
    public function create()
    {
        $message  = new Message();
        //メッセージ作成画面を表示
        return view('messages.create', compact('message'));
        // return view('messages.create', ['message' => $message]);
    }

    // postでmessages/にアクセスされた場合の「新規登録処理」
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|max:255',
        ]);

        // メッセージを作成
        $message = new Message();
        $message->title = $request->title;
        $message->content = $request->content;
        $message->save();
        // メッセージ一覧にリダイレクト
        return redirect('/');
    }

    // getでmessages/（任意のid）にアクセスされた場合の「取得表示処理」
    public function show($id)
    {
        // メッセージを取得
        $message = Message::findOrFail($id);
        // ビューにメッセージを渡す
        return view('messages.show', compact('message'));
        // return view('messages.show', ['message' => $message]);
    }

    // getでmessages/（任意のid）/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        // idに該当するメッセージを取得
        $message = Message::findOrFail($id);
        // ビューにメッセージを渡す
        return view('messages.edit', compact('message'));
        // return view('messages.edit', ['message' => $message]);
    }

    // putまたはpatchでmessages/（任意のid）にアクセスされた場合の「更新処理」
    public function update(Request $request, $id)
    {
        // バリデーション
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|max:255',
        ]);

        // idに該当するメッセージを取得
        $message = Message::findOrFail($id);
        // メッセージを更新
        $message->title = $request->title;
        $message->content = $request->content;
        $message->save();
        // トップページにリダイレクト
        return redirect('/');
        // return redirect()->route('messages.index');
    }

    // deleteでmessages/（任意のid）にアクセスされた場合の「削除処理」
    public function destroy($id)
    {
        // idに該当するメッセージを取得
        $message = Message::findOrFail($id);
        // メッセージを削除
        $message->delete();
        // トップページにリダイレクト
        return redirect('/');
        // return redirect()->route('messages.index');
        // return redirect()->back();
    }
}