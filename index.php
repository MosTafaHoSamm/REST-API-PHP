<?php
include "connect.php";
$stmt=$con->prepare('SELECT name FROM users WHERE id=1 ');
$stmt->execute();
$users=$stmt->fetchAll( );
$count=$stmt->rowCount();

echo"<pre>";
echo"$count";
echo"<br/>";

echo json_encode(
array(
array(
"name"=>"Mostafa",
"email"=>"Mostafa@gmail.com",
"phone"=>"01017242252"),
array(
"name"=>"Amer",
"email"=>"Amer@gmail.com",
"phone"=>"0101725624364"),
array(
"name"=>"Asmaa",
"email"=>"asmaa@gmail.com",
"phone"=>"012283833")
));
echo "</pre>";
?>