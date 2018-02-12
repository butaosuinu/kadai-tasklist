@extends('layouts.base')

@section('content')

	<h1>新規タスク作成ページ</h1>

	@if (count($errors) > 0)
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::model($task, ['route' => 'tasks.store']) !!}

		{!! Form::label('content', 'タスク内容:') !!}
		{!! Form::text('content') !!}

		{!! Form::label('status', 'タスクステータス:') !!}
		{!! Form::text('status') !!}

		{!! Form::submit('作成') !!}

	{!! Form::close() !!}

@endsection