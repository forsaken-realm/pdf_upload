<?php
session_start();
$dataBase = new PDO("mysql:host=localhost;dbname=user","madan","123");
$id = isset($_GET['id'])?$_GET['id']:"";
$st = $dataBase->prepare("select * from pdf where id=?");
$st->bindParam(1,$id);
$st->execute();
$row = $st->fetch();
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $row['pdf_name'] . '"');
header('Content-Transfer-Encoding: binary');
echo "<a href=".$row['pdf']."></iframe>";