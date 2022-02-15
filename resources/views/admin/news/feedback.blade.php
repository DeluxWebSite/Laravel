@extends('layouts.main')

@section('title')
@parent
Обратная связь
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        {!! Form::open(['route'=>'admin.create']) !!}
        <h1>
            Обратная связь
        </h1>
        <labl class="form-label">
            Тема
        </labl>
        <div class="form-group">
            {!! Form::text('title', '', ['class'=>'form-control']) !!}
        </div>
        <labl class="form-label">
            Описание
        </labl>
        <div class="form-group">
            {!! Form::textarea('content', '', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('send', ['class'=>'btn-success']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
