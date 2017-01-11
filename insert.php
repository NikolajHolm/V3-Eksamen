<?php
session_start();
$heading = $_GET['heading'];
$imgsrc = $_GET['imgsrc'];
$imgalt = $_GET['imgalt'];
$txt = $_GET['txt'];
$time = time();

require_once "connect.php";
$statement = $DBH->prepare("INSERT INTO articles (imgSrc, imgAlt, heading, time, articleText) values(?,?,?,?,?)");
$statement->bindParam(1, $imgsrc);
$statement->bindParam(2, $imgalt);
$statement->bindParam(3, $heading);
$statement->bindParam(4, $time);
$statement->bindParam(5, $txt);
// $statement->bindParam(6, $username);
$statement->execute();

header("location: index.php");


?>