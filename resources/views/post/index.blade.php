@extends('layouts.layout')

@section('title', 'Post.index')

@section('menubar')
@parent
post一覧
@endsection

@section('user')
<!-- <p class="navbar-text navbar-right">@yeild('header_user')</p> -->
@if (Auth::check())

<!-- ログアウトボタン -->
<span class="navbar-text">
    {{$user->name}}さん
</span>
<button class="btn">
    <a href="./post/create">新規投稿</a>
</button>
<button class="btn">
    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
        {{ __('ログアウト') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</button>
        @else
        <span class="navbar-text">
            ゲストさん
        </span>
        <button class="btn">
            <a href="./login">ログイン</a>
        </button>
        <button class="btn">
            <a href="./register">会員登録</a>
        </button>
        @endif
        @endsection



        @section('content')

        <div class="container">

            <div class="row mb-3">
                <div class="col-md-8 offset-2">
                    <img src="image/icon.png" class="img-fluid buruburu" alt="">
                </div>
            </div>

            <div class="container">
                <h1></h1>
            </div>

            <p>地域別波情報</p>
            <p>{{$today}}</p>

            <div class="row mb-4">
                <div class="card-deck border" style="padding:10px;">
                    <!-- 北部 -->
                    <div class="card col-sm-4">
                        <img class="card-img-top" src="./image/hokubu.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>北部</b>地域</h5>
                            @if($hokubu_rate < 20)
                            <p class="display-3">{{ $hokubu_rate }}点 ✖︎</p>
                            @elseif($hokubu_rate >= 20 && $hokubu_rate < 40)
                            <p class="display-3">{{ $hokubu_rate }}点 ▲</p>
                            @elseif($hokubu_rate >= 40)
                            <p class="display-3">{{ $hokubu_rate }}点 ○</p>
                            @endif
                            <a href="#" class="btn stretched-link"></a>
                        </div>
                        <div class="card-footer">
                            <small class="text-primary">最新投稿: {{$latestptime_hokubu}}</small>
                        </div>
                    </div>

                    <!-- 中部 -->
                    <div class="card col-sm-4">
                        <img class="card-img-top" src="./image/chubu.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>中部</b>地域</h5>
                            @if($chubu_rate < 20)
                            <p class="display-3">{{ $chubu_rate }}点 ✖︎</p>
                            @elseif($chubu_rate >= 20 && $chubu_rate < 40)
                            <p class="display-3">{{ $chubu_rate }}点 ▲</p>
                            @elseif($chubu_rate >= 40)
                            <p class="display-3">{{ $chubu_rate }}点 ○</p>
                            @endif
                            <a href="#" class="btn stretched-link"></a>
                        </div>
                        <div class="card-footer">
                            <small class="text-primary">最新投稿: {{$latestptime_chubu}}</small>
                        </div>
                    </div>

                    <!-- 南部 -->
                    <div class="card col-sm-4">
                        <img class="card-img-top" src="./image/nanbu.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>南部</b>地域</h5>
                            @if($nanbu_rate < 20)
                            <p class="display-3">{{ $nanbu_rate }}点 ✖︎</p>
                            @elseif($nanbu_rate >= 20 && $nanbu_rate < 40)
                            <p class="display-3">{{ $nanbu_rate }}点 ▲</p>
                            @elseif($nanbu_rate >= 40)
                            <p class="display-3">{{ $nanbu_rate }}点 ○</p>
                            @endif
                            <a href="#" class="btn stretched-link"></a>
                        </div>
                        <div class="card-footer">
                            <small class="text-primary">最新投稿: {{$latestptime_nanbu}}</small>
                        </div>
                    </div>
                </div>

            </div>




            <div class="row">
                <!-- 新着波情報 -->
                <div class="col-md-12 mt-12">
                    <p>新着情報</p>
                    <div class="border" style="padding:10px;">
                        @foreach($items as $item)
                        <ul class="list-group">
                            <a href="/post/{{ $item->id }}" class="list-group-item list-group-item-action">{{$item->putData()}}</a>
                        </ul>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        


        @endsection



        @section('footer')
        copyright 8080 yuta
        @endsection

        <!-- 
'point_name' => 'required',
'point_area' => 'required|not_in: 0',
'wave_score' => 'required|integer|not_in: 123',
'wind_description' => 'required|not_in: 0',
'weather' => 'required|not_in: 0',
'poeple_amount' => 'required|integer|not_in: 0',
'comment' => 'required',
 -->