<?php

namespace App;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
class Myfunc{


// 最新の投稿時間を持ってきて、フォーマットにかけて読みやすくする
public static function getTime($area){
    $newposttime = DB::table('posts')->where('point_area', $area)->orderBy('created_at', 'desc')->value('created_at');
    return Carbon::createFromFormat('Y-m-d H:i:s', $newposttime)->format('G時i分');
}

// 地域別の点数を持ってきて、四捨五入する
public static function getScore($area){
    $rate = DB::table('posts')->where('point_area', $area)->avg('wave_score');
    return round($rate);
}

}

?>