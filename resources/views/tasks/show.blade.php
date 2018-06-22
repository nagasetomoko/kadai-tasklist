@extends('layouts.app')

@section('content')

<h1>id = {{ $task->id }}のタスク詳細ページ</h1>
    <table class="table table-responsive">
        <thead>
                <tr>
                    <th>id</th>
                    <th>状態</th>
                    <th>タスク名</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
            </tbody>

    <a href="{{ route('tasks.edit', ['id' => $task->id]) }}" class="btn btn-info">
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> このタスクを編集
    </a>
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' =>'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection