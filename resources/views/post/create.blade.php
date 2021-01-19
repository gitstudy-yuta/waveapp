@extends('layouts.layout')

@section('title', 'Post.create')

@section('menubar')
@parent
post作成
@endsection

@section('user')
<!-- <p class="navbar-text navbar-right">@yeild('header_user')</p> -->
@if (Auth::check())

<!-- ログアウトボタン -->
<span class="navbar-text">
    {{$user->name}}さん
</span>
<!-- <button class="btn">
    <a href="./post/create">新規投稿</a>
</button> -->
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
@if (Auth::check())
<div class="container">
    <form action="/post" method="post">
        @csrf
        @if(count($errors) > 0)
            <p class="text-danger">入力に誤りがあります。もう一度確認してください</p>
        @endif
        <div class="form-groupe">
            <label>ポイント名</label>
            <input type="text" name="point_name" class="form-control col-sm-4" value="{{old('point_name')}}">
            @error('point_name')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="form-groupe">
            <label>ポイントエリア</label>
            <select name="point_area" class="form-control col-sm-4">
                <option value="0">--</option>
                <option value="南部">南部</option>
                <option value="中部">中部</option>
                <option value="北部">北部</option>
            <!-- <input type="text" name="point_area" class="form-control col-sm-4" value="{{old('point_area')}}"> -->
            </select>
            @error('point_area')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="form-groupe">
            <label>波得点</label>
            <select name="wave_score" class="form-control col-sm-4">
                <option value="123">--</option>
                <optgroup label="フラット・クローズ">
                    <option value="0">０点</option>
                    <option value="10">１０点×</option>
                </optgroup>
                <optgroup label="あまり良くない">
                    <option value="15">１５点×</option>
                    <option value="30">３０点△</option>
                </optgroup>
                <optgroup label="まあまあ">
                <option value="40">４０点△</option>
                </optgroup>
                <optgroup label="良い">
                <option value="50">５０点○</option>
                </optgroup>
                <optgroup label="すごく良い">
                <option value="70">７０点○</option>
                </optgroup>
                <optgroup label="ワールドクラス">
                <option value="100">１００点◎</option>
                </optgroup>
            </select>
            @error('wave_score')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="form-groupe">
            <label>風向</label>
            <select name="wind_description" class="form-control col-sm-4">
            <option value="0">--</option>
                <optgroup label="北">
                <option value="北">北</option>
                <option value="北東">北東</option>
                </optgroup>
                <optgroup label="東">
                <option value="東">東</option>
                <option value="南東">南東</option>
                </optgroup>
                <optgroup label="南">
                <option value="南">南</option>
                <option value="南西">南西</option>
                </optgroup>
                <optgroup label="西">
                <option value="西">西</option>
                <option value="北西">北西</option>
                </optgroup>
            </select>
            @error('wind_description')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="form-groupe">
            <label>天気</label>
            <select name="weather" class="form-control col-sm-4">
            <option value="0">--</option>
                <option value="晴">晴れ</option>
                <option value="曇り">曇り</option>
                <option value="雨">雨</option>
            </select>
            @error('weather')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="form-groupe">
            <label>人数</label>
            <select name="poeple_amount" class="form-control col-sm-4">
            <option value="99">--</option>
                <option value="0">０人</option>
                <option value="10">１０人</option>
                <option value="20">２０人</option>
                <option value="30">３０人</option>
            </select>
            @error('poeple_amount')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="form-groupe">
            <p>コメント</p>
            <textarea name="comment"  cols="30" rows="10" class="form-control col-sm-6"></textarea>
            @error('comment')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="fomr-groupe">
            <input type="submit" value="送信" class="btn btn-primary">
        </div>
        
        @if(session('flash_message'))
        <div class="alart alert-success" role="alert">{{session('flash_message')}}</div>
        @endif

    </form>
</div>
@else
<div class="container">
    <p>投稿をするには会員登録が必要です。</p>
</div>
@endif
@endsection

@section('footer')
copyright 8080 yuta
@endsection

<!-- 'user_id' => 'required',
// 'point_name' => 'required',
// 'point_area' => 'required',
// 'wave_score' => 'required|integer',
// 'wind_description' => 'required',
// 'weather' => 'required',
// 'poeple_amount' => 'required|integer',
// 'comment' => 'required', -->