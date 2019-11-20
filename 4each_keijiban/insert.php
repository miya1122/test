<?php
mb_internal_encoding("utf8");



$pdo = new PDO("mysql:dbname=saya_miyazawa;host=localhost;","root","root");

$pdo->exec("insert into 4each_keijiban(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location://localhost/4each_keijiban/index.php");

?>

<!doctype html>
<html lang="ja"></html>