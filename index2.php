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
		$hand = ['👊','✌','✋'];
		$hand_img = [
			'<img src="images/janken_gu.png" width="64" alt="">',
			'<img src="images/janken_choki.png" width="64" alt="">',
			'<img src="images/janken_pa.png" width="64" alt="">'
		];
		$player1_index = rand(0,2);
		$player2_index = rand(0,2);
		$player1 = $hand[$player1_index];
		$player2 = $hand[$player2_index];

		echo "PLAYER1:{$hand_img[$player1_index]} PLAYER2:{$hand_img[$player2_index]}<br>";

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
