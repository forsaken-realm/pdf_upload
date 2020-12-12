
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>

<form action="database.php" method="post" style="padding: 50px" enctype="multipart/form-data">

        <input type="file"  accept="application/pdf" class="form-control" name="myFile" id="inputGroupFile02">
    <div class="d-grid gap-2">
        <button class="btn btn-primary" name="uploadButton" type="submit">Button</button>
    </div>
</form>
<?php
session_start();
$dataBase = new PDO("mysql:host=localhost;dbname=user","madan","123");
$stat = $dataBase->prepare("select * from pdf");
$stat->execute();

while($row = $stat->fetch()){
    echo "<li><a target='_blank' href='view.php?id=".$row['id']."'>".$row['pdf_name']."</a></li>";

}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>