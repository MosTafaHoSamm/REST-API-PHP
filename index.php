<?php
include 'connect.php';
// $stmt=$con->prepare("UPDATE users SET name=:n, email=:e WHERE id=:i");
// $stmt->execute(
// array(':n'=>'Hasnaa',
// ':e'=>'Hasnaa@gmail.com',
// ':i'=>2
// )
// );


$stmt=$con->prepare("UPDATE users SET name=?, email=? WHERE id=?");
$stmt->execute(
array('KHoloud','kholod@gmail.com',1)
);
$count=$stmt->rowCount();
if($count){
echo"Success";
}
else{
echo"fail";
}
?>