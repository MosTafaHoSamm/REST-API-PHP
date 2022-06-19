<?php
include "connect.php";

// $stmt=$con->prepare(
// "INSERT INTO `users` (`name`,`email`)
//  VALUES
//   ('hosam','HosamEldinMohamed@gmail.com'),
//   ('Eman','EmanHola@gmail.com')
//
//   ");

// $stmt=$con->prepare(
// "INSERT INTO `users` (`name`,`email`)
//  VALUES
//   (?,?) ");
//    $stmt->execute(
//    array( "Qamar", "Qamar@gmail.com" ) );


// using placeholder sign (:)

$stmt=$con->prepare(
"INSERT INTO `users` (`name`,`email`)
 VALUES
  (:n,:e) ");
   $stmt->execute(
  array(':n'=>'Wfaa',':e'=>'wfaa@gmail.com') );


 $count=$stmt->rowCount();
if($count>0)
{
echo"User Added Successfully";
}
else{
echo"Failed Adding User";
}
?>