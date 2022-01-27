@extends('layouts.main')

@section('title')
@parent
Создание новости
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        {!! Form::open(['route'=>'admin.create']) !!}

        <labl class="form-label">
            Заголовок
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
