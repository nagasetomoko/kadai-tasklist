@extends('layouts.app')

@section('content')

    <h1>新規タスク登録ページ</h1>
        <div class="row">
            <div class="col-xs-12" "col-sm-offset-2 col-sm-8" "col-md-offset-2 col-md-8" "col-lg-offset-3 col-lg-6">
                {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
                    <div class="form-group">
                        {!! Form::label('content', 'タスク：') !!}
                        {!! Form::text('content', null, ['class' => 'form-control']) !!}
                    </div>
                
                    <div class="form-group">
                        {!! Form::label('status', '状態:') !!}
                        {!! Form::select('status',array('未了' =>'未了', '完了' =>'完了')) !!}
                    </div>

                    {!! Form::submit('登録', ['class' => 'btn btn-success']) !!}
    
                    {!! Form::close() !!}
            </div>
        </div>
@endsection