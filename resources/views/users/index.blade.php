@extends('layouts.base')

@section('content')
    @include('users.users', ['users' => $users])
@endsection