@extends('layouts.main')

@section('title')
@parent
Новости
@endsection

@section('content')
<div>
    @forelse($news as $item)

    <a href="{{route('news', $item->id)}}">{!! $item->title !!}</a>
    <br>
    <hr>

    @empty
    <h2>Новостей нет!</h2>
    @endforelse
</div>
@endsection