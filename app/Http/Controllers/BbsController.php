<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Bbs; // 作成したモデルファイルを引用

class BbsController extends Controller
{
    public function index() {
        $bbs = Bbs::all(); // 全データの取り出し
        return view('bbs.index', ['bbs' => $bbs]);  // bbs.indexにデータを渡す
    }

    // 投稿された内容を表示するページ
    public function create(Request $request) {

        // バリデーションチェック
        $request->validate([
            'name' => 'required|max:30',
            'comment' => 'required|min:3|max:140',
        ]);

        // 投稿内容を受け取って変数に入れる
        $name = $request->input('name');
        $comment = $request->input('comment');
        // bbsテーブルに投稿内容を追加
        Bbs::insert(["name" => $name, "comment" => $comment]);

        $bbs = Bbs::all(); // 全データの取り出し
        return view('bbs.index', ["bbs" => $bbs]); // bbs.indexにデータを渡す
    }
}