<?php

// خطا كارثي استغرق يوم  dbn  بدلا من  dbname
$dsn = "mysql:host=localhost;dbname=noteapp";
$user = "root";
$password = "";

//to support Arabic
$option = array(
PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES UTF8"
);

include "functions.php";
//code to connect
try{
       $con = new PDO( $dsn , $user , $password , $option );
       $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
echo $e->getMessage();
}

// ?>
// <?php
// $dsn = "mysql:host=localhost;dbname=coursephp" ;
// $user = "root" ;
// $pass = "" ;
// $option = array(
//     PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8" // FOR Arabic
// );
// try {
//
//     $con = new PDO($dsn , $user , $pass , $option );
//     $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION) ;
//
//
//
// }catch(PDOException $e){
//   echo $e->getMessage() ;
// }