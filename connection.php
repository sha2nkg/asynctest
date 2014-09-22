<?php
$connection=mysql_connect('localhost','sha2nkg','123456');

if($connection){
  mysql_select_db('async') or die(mysql_error());
}
else{ die(mysql_error());}

?>