@extends('layouts.layout')

@section('title', 'User.index')

@section('menubar')
@parent
user一覧
@endsection

@section('content')
    <table>
    <tr><th>User_id</th><th>name</th><th>mail</th></tr>
    @foreach($items as $item)
    <tr><td>{{$item->id}}</td><td>{{$item->name}}</td><td>{{$item->email}}</td></tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyright 8080 yuta
@endsection
