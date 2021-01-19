<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $tabele = 'posts';
    protected $guarded = array('id');
    protected $dates = ['created_at',];

    public function user(){
        return $this->belongsTo('App\User');
    }
    // public static $rules = array(
        // 'user_id' => 'required',
        // 'point_name' => 'required',
        // 'point_area' => 'required',
        // 'wave_score' => 'required|integer',
        // 'wind_description' => 'required',
        // 'weather' => 'required',
        // 'poeple_amount' => 'required|integer',
        // 'comment' => 'required',
    // );
    
    public function putData(){
        
        $posttime = $this->created_at;

        $posttime = Carbon::createFromFormat('Y-m-d H:i:s', $posttime)->format('G時i分');

        // $posttime = $this->created_at->format('Y-m-d H:i:s');

        // Carbon::createFromFormat('Y-m-d H:i:s', $newposttime)->format('G時i分');

        return  $posttime . '時更新' . '~    　　　　　  ' . $this->point_name . 'ポイント~   ' ;
    }

}
