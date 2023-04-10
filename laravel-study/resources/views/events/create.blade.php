@extends('layouts.default')

@section('title', 'イベント登録');
@section('content')
	@if (session()->has('success'))
		<p>{{ session('success') }}</p>
	@endif
	<form action="{{ route('events.store') }}" method="POST">
		@csrf
		<label>イベント名： <input type="text" name="title"></label>
		<button type="submit">登録</button>
	</form>
@endsection