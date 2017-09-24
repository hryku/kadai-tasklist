@extends('layouts.app')

@section('content')

<!--　ここにページ毎のコンテンツを書く　-->
<h1>taskを作りますよー</h1>

<div class="row">
    
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
        <div class="form-group">
            {!! Form::label('status', 'status:') !!}
            {!! Form::text('status', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('content', 'task:')!!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
        
        {!! Form::submit('作成', ['class' => 'btn btn-info']) !!}

        {!! Form::close() !!}
    </div>
</div>
@endsection
