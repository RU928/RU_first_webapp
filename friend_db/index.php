<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>友達DB</title>
    <link rel="stylesheet" href="styles.css">
	</head>
	<body>
    <div class="h1">
	   <h1>友達データベース</h1>
   </div>

     <div class="m_box">
       <p>友達登録</p>
       <div class="s_box">
    		 <form action="getform.php" method="post">
    			 	姓: <input type="text" name="last" /><br>
    				名: <input type="text" name="first" /><br>
    				出会った場所: <input type="text" name="place" /><br>
    				<!-- <input type="submit" value="登録"/> -->
            <div class="btn"><button type="submit" name="action" value="save">登録</button></div>
    			</form>
      </div>
      </div>

      <div class="m_box right">
        <p>友達検索</p>
        <div class="s_box">
          <form action="getform.php" method="post">
     			 	姓: <input type="text" name="last" /><br>
     				名: <input type="text" name="first" /><br>
     				出会った場所: <input type="text" name="place" /><br>
     				<!-- <input type="submit" value="検索"/> -->
            <div class="btn"><button type="submit" name="action" value="search">検索</button></div>
        </div>
      </div>
	</body>
</html>
