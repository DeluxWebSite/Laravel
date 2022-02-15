@extends('layouts.main')

@section('title')
@parent

Новость {{ $item->id }}
@endsection

@section('content')
<div>
    <h1>{{$item->title}}</h1>
    <div>{{$item->description}}</div>
    <hr>
    <a href='./'>Назад</a>
</div>
@endsection
