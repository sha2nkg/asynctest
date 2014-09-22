<?php
//header('Content-Type: application/json');
include('connection.php');



$sql="select * from name";

$query=mysql_query($sql);
$outputs=array();
while($results=mysql_fetch_array($query,MYSQL_ASSOC))
{
  //echo "<li><a href='#' onclick='editfunc($results[id])'>".$results['id'].$results['name']."</a></li>";
  $outputs[]=$results;
  }
  echo json_encode($outputs, JSON_NUMERIC_CHECK);
?>