<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\WaveRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Myfunc;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  ログインしていないと、PostControlerの処理ができないようにする。
    //  public function __construct()
    //  {
    //      $this->middleware('auth');
    //  }
    
    public function index()
    {
        // 現在のユーザー
        $user = Auth::user();

        $today = new Carbon('today');

        // 投稿全部取得
        $items = Post::all();

        // 最新投稿時間,波得点平均
        $area = "北部";
        $latestptime_hokubu = Myfunc::getTime($area);
        $hokubu_rate = Myfunc::getScore($area);

        $area = "中部";
        $latestptime_chubu = Myfunc::getTime($area);
        $chubu_rate = Myfunc::getScore($area);

        $area = "南部";
        $latestptime_nanbu = Myfunc::getTime($area);
        $nanbu_rate = Myfunc::getScore($area);
        

        return view('post.index', ['items' => $items, 'user' => $user,
         'hokubu_rate' => $hokubu_rate, 'chubu_rate' => $chubu_rate, 'nanbu_rate' => $nanbu_rate, 'latestptime_hokubu' => $latestptime_hokubu, 
         'latestptime_chubu' => $latestptime_chubu, 'latestptime_nanbu' => $latestptime_nanbu, 'today' => $today]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        return view('post.create', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WaveRequest $request)
    {
        
        //ログインしているユーザーの取得
        $user = Auth::user();

        // DBに保存処理
        $post = new Post();
        $post->user_id = Auth::id();
        $post->point_name = $request->point_name;
        $post->point_area = $request->point_area;
        $post->wave_score = $request->wave_score;
        $post->wind_description = $request->wind_description;
        $post->weather = $request->weather;
        $post->poeple_amount = $request->poeple_amount;
        $post->comment = $request->comment;

        $post->save();

        session()->flash('flash_message', '投稿が完了しました。');
        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $user = Auth::user();
        return view('post.show', ['post' => $post, 'user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
