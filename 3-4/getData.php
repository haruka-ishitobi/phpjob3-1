<?php

require_once("pdo.php");

Class Dbc{




public function getUserData(){
$dbh=connect();

$sql_getusers = " SELECT * FROM users limit 1";
$stmt_users = $dbh ->query($sql_getusers)->fetchALL(PDO::FETCH_ASSOC);
$result1= $stmt_users;
return $result1;
$dbh=null;
}


public function getPostData(){
$dbh=connect();
$sql_getposts = "SELECT * FROM posts ORDER BY id desc";
$stmt_getposts =$dbh ->query($sql_getposts)->fetchALL(PDO::FETCH_ASSOC);
$result2= $stmt_getposts;
return $result2;
$dbh=null;
}


}
?>