@extends('layouts.base')

@section('content')

	<h1>ID : {{ $task->id }} のタスク編集ページ</h1>

	@if (count($errors) > 0)
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
		{!! Form::label('content', 'タスク内容:') !!}
		{!! Form::text('content') !!}

		{!! Form::label('status', 'タスクステータス:') !!}
		{!! Form::text('status') !!}

		{!! Form::submit('更新') !!}

	{!! Form::close() !!}

@endsection