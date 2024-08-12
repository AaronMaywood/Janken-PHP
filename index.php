<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>全自動じゃんけん</title>
</head>
<body>
	<h1>全自動じゃんけん</h1>
	<p>じゃんけん...ぽん！</p>
	<?php
		function randomWord($words){
			$index = rand(0, count($words) - 1);
			return $words[ $index ];
		}
		$hand = ['👊','✌','✋'];
		$player1 = randomWord($hand);
		$player2 = randomWord($hand);

		echo "PLAYER1:{$player1} PLAYER2:{$player2}<br>";

		if( $player1 === $player2 ){
			echo "あいこ";
		}else if( $player1 === '👊' && $player2 === '✌'){
			echo "PLAYER1の勝ち！";
		}else if( $player1 === '✌' && $player2 === '✋'){
			echo "PLAYER1の勝ち！";
		}else if( $player1 === '✋' && $player2 === '👊'){
			echo "PLAYER1の勝ち！";
		}else{
			echo "PLAYER2の勝ち！";
		}
	?>
</body>
</html>
