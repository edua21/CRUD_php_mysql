<?php

require_once('functions/dbfunctions.php');
$connection = getDataBaseConnection();

$date = $_POST['date'];
$name = $_POST['name'];
$city = $_POST['city'];
$comment = $_POST['comment'];

$query = "INSERT INTO libros (date, name, city, comment) VALUES ('$date', '$name', '$city', '$comment');";

$connection->query($query);
$connection->close();

header('location: index.php');