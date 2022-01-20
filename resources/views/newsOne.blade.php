@extends('layouts.main')

@section('title')
@parent

Новость {{ $news['id'] }}
@endsection

@section('content')
<div>
    <h1>{{$news['title']}}</h1>
    <div>{{$news['description']}}</div>
    <hr>
    <a href='./'>Назад</a>
</div>
@endsection
