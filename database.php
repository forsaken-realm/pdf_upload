<?php
session_start();
$dataBase = new PDO("mysql:host=localhost;dbname=user","madan","123");

if (isset($_POST['uploadButton'])){
    $name = $_FILES['myFile']['name'];
    $type = $_FILES['myFile']['type'];
    $data = file_get_contents($_FILES['myFile']['tmp_name']);
    $stmt = $dataBase->prepare("insert into pdf values('',?,?)");
    $stmt->bindParam(1,$name);
    $stmt->bindParam(2,$data);
    $stmt->execute();
    echo "uploaded";

}