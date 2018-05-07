
姓:<?php echo $_POST['last'];  ?>
</br>名:<?php echo $_POST['first'];  ?>
</br>知り合った場所:<?php echo $_POST['place'];  ?>
</br>以上のデータは正常に保存されました。

<?php
try {
    $dbh = new PDO(
    'mysql:host=ApricationServer;dbname=db1;charset=utf8',
    'root',
    '!Sugamon3',
    array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_EMULATE_PREPARES => false,
    )
  );

  $first = $_POST['first'];
  $last = $_POST['last'];
  $place = $_POST['place'];

  echo "$first と　$last と　$place";

  $prepare = $dbh->prepare('insert into db1.friend (first,last,place) values (?, ?, ?)');

  $prepare->bindValue(1,(string)$first,PDO::PARAM_STR);
  $prepare->bindValue(2,(string)$last,PDO::PARAM_STR);
  $prepare->bindValue(3,(string)$place,PDO::PARAM_STR);

  $prepare->execute();


} catch (PDOException $e) {

    $error = $e->getMessage();
    echo $error;
}
?>
