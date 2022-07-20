<?php
$sname = 'localhost';
$uname = 'root';
$spass = 'root';
$db_name = 'php_crud';

$conn = new mysqli($sname, $uname, $spass, $db_name);
/* check error in db connection */
if(!$conn->connect_error){
    echo('connection error'+$conn->connect_error);
}
?>
