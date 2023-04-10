@extends('layouts.default')

@section('title', 'ハイアンドロー')
@section('content')
    <p>ディーラのカードは...『{{ $dealersNumber }}』</p>
    <form method="POST" action="{{ route('hi-low') }}">
        @csrf
        <button type="submit" name="guess" value="high">自分のカードが大きい</button>
        <button type="submit" name="guess" value="low">自分のカードが同じか小さい</button>
    </form>
@endsection