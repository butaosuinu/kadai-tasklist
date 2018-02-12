@extends('layouts.base')

@section('content')

	<h1>新規タスク作成ページ</h1>

	{!! Form::model($task, ['route' => 'tasks.store']) !!}

		{!! Form::label('content', 'タスク内容:') !!}
		{!! Form::text('content') !!}

		{!! Form::submit('作成') !!}

	{!! Form::close() !!}

@endsection