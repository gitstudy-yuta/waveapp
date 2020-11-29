@extends('layouts.layout')

@section('title', 'Post.create')

@section('menubar')
@parent
post作成
@endsection

@section('content')
<div class="container">
    <form action="/posts" method="post">
        @csrf
        <div class="form-groupe">
            <label>ポイント名</label>
            <input type="text" name="point_name" class="form-control col-sm-4" value="{{old('point_name')}}">
        </div>

        <div class="form-groupe">
            <label>ポイントエリア</label>
            <input type="text" name="point_area" class="form-control col-sm-4" value="{{old('point_area')}}">
        </div>

        <div class="form-groupe">
            <label>波得点</label>
            <select name="wave_score" class="form-control col-sm-4">
                <option value="--">--</option>
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
        </div>

        <div class="form-groupe">
            <label>風向</label>
            <select name="wind_description" class="form-control col-sm-4">
            <option value="--">--</option>
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
        </div>

        <div class="form-groupe">
            <label>天気</label>
            <select name="weather" class="form-control col-sm-4">
            <option value="--">--</option>
                <option value="晴">晴れ</option>
                <option value="曇り">曇り</option>
                <option value="雨">雨</option>
            </select>
        </div>

        <div class="form-groupe">
            <label>人数</label>
            <select name="poeple_amount" class="form-control col-sm-4">
            <option value="--">--</option>
                <option value="0">０人</option>
                <option value="10">１０人</option>
                <option value="20">２０人</option>
                <option value="30">３０人</option>
            </select>
        </div>

        <div class="form-groupe">
            <p>コメント</p>
            <textarea name="comment"  cols="30" rows="10" class="form-control col-sm-4"></textarea>
        </div>

        <div class="fomr-groupe">
            <input type="submit" value="送信" class="btn btn-primary">
        </div>
        

    </form>
</div>
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