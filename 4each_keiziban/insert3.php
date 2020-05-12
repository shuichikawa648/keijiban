<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=4each;host=localhost;","root","mysql");

$pdo->exec("insert into 4each_keiziban(handlename,title,comments)
value('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location:http://localhost/4each_keiziban/index2.php");

?>