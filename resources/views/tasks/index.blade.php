@extends('layouts.app')

@section('content')

<!--　ここにページ毎のコンテンツを書く　-->

<h1>task list　ですよー　(´･ω･`)</h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->status }} > {{ $task->content }}</li>
            @endforeach
        </ul>
    @endif

    {!! link_to_route('task.create', '新規taskの作成') !!}

@endsection