<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $tabele = 'posts';
    protected $guarded = array('id');

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
}
