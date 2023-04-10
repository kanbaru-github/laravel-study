<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HiLowController extends Controller
{
    public function index() {
		$dealersNumber = random_int(1, 12);
		// セッションに保存
		session(['dealersNumber' => $dealersNumber]);
	
		return view('hi-low.index', ['dealersNumber' => $dealersNumber]);
	}
	
	public function result(Request $request) {
		// ディーラーの数字(sessionに保存されたもの)を取得
		$dealersNumber = session('dealersNumber');
	
		// プレイヤーの数字を1~12の中からランダムに取得
		$playersNumber = random_int(1, 12);
		// プレーヤーの数字がディーラーのものより大きいか判定(大きい場合にtrue)
		$isHigh = $playersNumber > $dealersNumber;
		// 予想が当たったかの判定
		$isCorrect = ($isHigh && $request->get('guess') === 'high') || (!$isHigh && $request->get('guess') === 'low');
		return view('hi-low.result', [
			'dealersNumber' => $dealersNumber,
			'playersNumber' => $playersNumber,
			'isCorrect' => $isCorrect,
		]);
	}
}
