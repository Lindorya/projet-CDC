<?php

$user = "romaneh";
$pass = "866Tnq7BVQ";

$dbh = new PDO('mysql:host=localhost;dbname=romaneh', $user, $pass);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); ?>
