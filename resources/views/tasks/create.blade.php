@extends('layouts.app')

@section('content')

<!--　ここにページ毎のコンテンツを書く　-->
<h1>taskを作りますよー</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}
        
        {!! Form::label('status', 'status:') !!}
        {!! Form::text('status') !!}
        
        
        {!! Form::label('content', 'task:')!!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('作成') !!}

    {!! Form::close() !!}


@endsection
