<?php
include "connect.php";

$stmt=$con->prepare(
"INSERT INTO `users` (`name`,`email`)
 VALUES
  ('hosam','HosamEldinMohamed@gmail.com'),
  ('Eman','EmanHola@gmail.com')

  ");
$stmt->execute();
$count=$stmt->rowCount();
if($count>0)
{
echo"User Added Successfully";
}
else{
echo"Failed Adding User";
}
?>