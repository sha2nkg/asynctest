<?php
include('connection.php');
function selectall(){
$sql="select * from name";

$query=mysql_query($sql);
$outputs=array();
?>
<ul>
<?php

while($results=mysql_fetch_array($query,MYSQL_ASSOC))
{
  echo "<li><a href='#' onclick='editfunc($results[id])'>".$results['id'].$results['name']."</a></li>";
  $outputs[]=$results;
  }
  echo json_encode($outputs, JSON_NUMERIC_CHECK);
} 
?>
</ul>
<?php
$method = $_SERVER["REQUEST_METHOD"];
if(($_SERVER["REQUEST_METHOD"]=="POST")&&($_POST['PUT']=="PUT"))
{
   $method="PUT";
 }
echo $method;


switch ($method) {

case "GET":		// Return all records
  selectall();
 break;

 case "POST":	
	$Name=$_POST['name'];
	
  $sql = 	"INSERT INTO name (Name) " .
				"VALUES ('$Name')";
   mysql_query($sql);
  header('location:index.html');
  echo"method is post";
 break;
 
 case "PUT":
     echo $id=$_POST['id'];
     echo $Name=$_POST['name'];
     $sql ="UPDATE name " .
				"SET Name = '$Name' " .
				"WHERE ID = '$id' ";
		echo $sql;
	   mysql_query($sql);
     echo"method is put";
	 header('location:index.html');
	 break;


 default:
    echo"method type not find";
}

?>
<script type="text/javascript" src="jquery-1.6.1.min.js"></script> 
<script type="text/javascript">
function editfunc(id)
{
  var editid="editid="+id;
  //alert(editid);
  //alert("edit id is " + editid);
   $.ajax({
    url:"editpage.php",
    data: editid,
	type:"POST",
	dataType:"json",
	success:function(datareply)
	  {
	    //alert(datareply.id);
		//console.log(datareply);
	   $("#edid").val(datareply.id);
       $("#edname").val(datareply.ename);
	  
	  }
   });
}
</script>