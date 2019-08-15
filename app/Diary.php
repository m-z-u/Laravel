<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/*diariesテーブルを表すクラス
モデルは１つのクラスが１つのテーブルを表す
クラス名の単数形のスネークケースをテーブル名にする
クラス:Diary -> diaries
Bookstore -> book_stores
クラス名の複数形のスネークケース以外をテーブル名にしたい時は
protected $table = 'テーブル名'でテーブル名を指定*/ 

class Diary extends Model
{
    //
}
