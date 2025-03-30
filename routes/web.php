<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MessagesController::class, 'index']);
Route::resource('messages', MessagesController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

// // メッセージの個別詳細ページ
// Route::get('messages/{id}', [MessagesController::class, 'show']);
// // メッセージの新規登録を処理
// Route::post('messages', [MessagesController::class, 'store']);
// // メッセージの更新処理
// Route::put('messages/{id}', [MessagesController::class, 'update']);
// // メッセージを削除
// Route::delete('messages/{id}', [MessagesController::class, 'destroy']);

// // index: showの補助ページ
// Route::get('messages', [MessagesController::class, 'index']);
// // create: 新規作成用のフォームページ
// Route::get('messages/create', [MessagesController::class, 'create']);
// // edit: 更新用のフォームページ
// Route::get('messages/{id}/edit', [MessagesController::class, 'edit']);