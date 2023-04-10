@extends('layouts.default')

@section('title', 'ハイアンドロー(結果)')
@section('content')
    <p>ディーラのカードは...『{{ $dealersNumber }}』</p>
    <p>あなたのカードは...『{{ $playersNumber }}』</p>
    @if($isCorrect)
        <p>おめでとうございます！ <br>あたりです！！</p>
    @else
        <p>ざんねん。。 <br>はずれです</p>
    @endif
    <a href="{{ route('hi-low') }}">もう一度挑戦する</a>
@endsection