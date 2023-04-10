@extends('layouts.default')

@section('title', 'ログイン')
@section('content')
    <form action="{{ route('login') }}" method="POST">
		@csrf
        <div><label>メールアドレス: <input type="email" name="email"></label></div>
        <div><label>パスワード: <input type="password" name="password"></label></div>
        <button type="submit">ログイン</button>
    </form>
@endsection