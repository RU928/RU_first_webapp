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

  $val1 = 100;
  $prepare = $dbh->prepare('select name from fruit where price = ?');
  $prepare->bindValue(1,(int)$val1,PDO::PARAM_INT);
  $prepare->execute();

  $result = $prepare->fetchAll();
  print_r($result);
  ///echo $result[0];

} catch (PDOException $e) {

    $error = $e->getMessage();
}
