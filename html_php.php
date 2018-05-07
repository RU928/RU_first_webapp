<!DOCTYPE html>
<?php
$name = "田中";
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>HTML内でのPHP処理</title>
	</head>
	<body>
	   <h1><?php echo 'フレンドデータベース';  ?></h1>
     <?php
     $text = "あなたの友達の情報をデータベースに登録します";
     echo "<p> $text </p>";
		 //$span = "<span style='color:red'>  $name さん。</span>";
		 //echo $span;
     ?>

		 <form action="getform.php" method="post">
			 	姓: <input type="text" name="last" /><br>
				名: <input type="text" name="first" /><br>
				知り合った場所: <input type="text" name="place" /><br>
				<input type="submit" />
			</form>

	</body>
</html>
