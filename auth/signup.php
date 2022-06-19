<?php
include"../connect.php";
$name=filterRequest('name');
$email=filterRequest('email');
$password=filterRequest('password');
//الشكل السابق معرض للاختراق والحل تطبيق الحل التالي وهو استخدام fun htmlspecialchars(strip_tags($_POST[variable]) لحمايه البيانات
$stmt=$con->prepare(
"INSERT INTO `users` (`name`,`email`,`password`)
VALUES (?,?,?)
");
$stmt->execute(
array($name,$email,$password));
$count=$stmt->rowCount();
if($count>0)
{
echo json_encode(array('status'=>'success'));
}
else {
echo json_encode(array("status"=>"fail"));
}
?>