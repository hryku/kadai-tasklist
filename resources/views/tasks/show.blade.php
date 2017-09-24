@extends('layouts.app')

@section('content')

<!--　ここにページ毎のコンテンツを書く　-->
<h1>id = {{ $task->id }} のtask詳細</h1>

<p>status: {{ $task->status }}</p>
<p>task: {{ $task->content }}</p>

{!! link_to_route('tasks.edit', 'このtaskを編集', ['id' => $task->id]) !!}

{!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
{!! Form::submit('削除', ['class' => 'btn btn-success']) !!}

{!! Form::close() !!}


@endsection
