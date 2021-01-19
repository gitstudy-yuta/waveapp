@extends('layouts.layout')

@section('title', 'Post.show')



@section('user')
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
    @if(Auth::check())


    <p>{{$post->id}}</p>


    @else
    会員登録をしないと波情報は見れません！！
    <a href="/post" class="btn btn-primary">戻りんす</a>
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