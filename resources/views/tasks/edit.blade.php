@extends('layouts.app')

@section('content')

<!--　ここにページ毎のコンテンツを書く　-->

<h1>id: {{ $task->id }}のtaskを編集する</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        
        {!! Form::label('status', 'status:') !!}
        {!! Form::text('status') !!}
        
        {!! Form::label('content', 'task:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('更新') !!}

    {!! Form::close() !!}    


@endsection
