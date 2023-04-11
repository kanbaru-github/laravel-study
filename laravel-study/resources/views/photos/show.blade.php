@extends('layouts.default');

@section('title', '画像アップロード表示');
@section('content')
	@if(session()->has('success'))
		<p>{{ session('success') }}</p>
	@endif
	<img src="{{ asset('storage/photos/'.$fileName) }}" alt="">

	<form action="{{ route('photos.destroy', ['photo' => $fileName]) }}" method="POST">
		@csrf
		@method('DELETE')
		<button type="submit">削除</button>
	</form>
	<a href="{{ route('photos.download', ['photo' => $fileName]) }}">ダウンロード</a>
@endsection