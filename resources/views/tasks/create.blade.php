@extends('layouts.app')

@section('content')

    <h1>新規タスク登録ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
    {!! Form::label('status', '状態:') !!}
    {!! Form::select('status', array('未了' =>'未了', '完了' =>'完了')) !!}
    
    {!! Form::label('content', 'タスク：') !!}
    {!! Form::text('content') !!}
    
    {!! Form::submit('登録') !!}
    
    {!! Form::close() !!}

@endsection